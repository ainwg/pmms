<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Transaction;
use Carbon\Carbon;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Response;



class AccountController extends Controller
{
    public function makeOpening()
    {
        return view('ManageAccount.makeOpening');
    }



    public function openRegister(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'account_open_amount' => 'required|numeric|min:0',
        ]);

        // Create a new Account instance
        $account = new Account;
        $account->account_open_datetime = now(); // Set the current date and time
        $account->account_open_amount = $validatedData['account_open_amount'];
        $sales_date = $account->account_open_datetime->toDateString();
        $sales_amount = Transaction::whereDate('created_at', $sales_date)->sum('transaction_amount');

        // Set the closing values to null for opening
        $account->account_close_datetime = null;
        $account->account_close_amount = null;
        // Get the current sales date and amount in database
        $account->sales_date = $sales_date;
        $account->sales_amount = $sales_amount;
        $account->save();

        // Perform any additional actions or redirection
        return redirect('/account/view-sales')->with(compact('sales_date', 'sales_amount'));
    }



    public function closeRegister(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'account_close_amount' => 'required|numeric|min:0',
        ]);

        // Find the latest open account entry
        $account = Account::whereNull('account_close_datetime')->latest()->first();

        if ($account) {
            // Set the closing values for the account
            $account->account_close_datetime = now();
            $account->account_close_amount = $validatedData['account_close_amount'];
            
            // Get the sales_date from the account
            $sales_date = $account->sales_date;
            
            // Update the sales_amount based on the same sales_date with transaction_date
            $sales_amount = Transaction::whereDate('created_at', $sales_date)
                ->sum('transaction_amount');
            
            // Update the sales_amount in the account
            $account->sales_amount = $sales_amount;
            
            $account->save();
        }

        return redirect('/account/make-opening');
    }



    public function viewSales()
    {
        $account = Account::latest()->first();
        $account_open_amount = $account ? $account->account_open_amount : 0;
        $account_open_datetime = $account ? Carbon::parse($account->account_open_datetime) : null;

        $sales_date = null;
        $sales_amount = 0;

        if ($account_open_datetime) {
            $sales_date = $account_open_datetime->toDateString();

            $sales_amount = Transaction::whereDate('created_at', $sales_date)
                ->sum('transaction_amount');
        }

        return view('ManageAccount.viewSales', compact('account_open_amount', 'account_open_datetime', 'sales_date', 'sales_amount'));
    }


    public function viewProfit()
    {
        return view('ManageAccount.viewProfit');
    }



    public function viewExpenses()
    {
        return view('ManageAccount.viewExpenses');
    }



    public function addExpenses()
    {
        return view('ManageAccount.addExpenses');
    }



    public function getProfitData(Request $request)
    {
        $date = $request->input('date');

        // Convert the selected date to the database format (Y-m-d)
        $formattedDate = Carbon::createFromFormat('d-m-Y', $date)->toDateString();

        // Calculate revenue
        $revenue = Transaction::whereDate('created_at', $formattedDate)
            ->sum('transaction_amount');

        // Calculate expenses
        $expenses = Account::whereDate('expense_date', $formattedDate)
            ->sum('expense_amount');

        // Calculate profit
        $profit = number_format($revenue - $expenses, 2, '.', '');

        // Prepare the data to be returned as JSON
        $data = [
            'revenue' => $revenue,
            'expense' => $expenses,
            'profit' => $profit,
        ];

        // Return the data as JSON response
        return response()->json($data);
    }



    public function downloadStatement(Request $request)
    {
        $date = $request->input('date');

        // Convert the selected date to the database format
        $formattedDate = Carbon::parse($date)->format('Y-m-d');
        $displayDate = Carbon::parse($date)->format('d-m-Y');

        // Calculate revenue
        $revenue = Transaction::whereDate('created_at', $formattedDate)
            ->sum('transaction_amount');

        // Calculate expenses
        $expenses = Account::whereDate('expense_date', $formattedDate)
            ->sum('expense_amount');

        // Calculate profit
        $profit = number_format($revenue - $expenses, 2, '.', '');

        // Pass the data to the view
        $data = [
            'date' => $displayDate,
            'revenue' => $revenue,
            'expenses' => $expenses,
            'profit' => $profit,
        ];

        // Render the view content into HTML
        $html = View::make('ManageAccount.downloadStatement', $data)->render();

        // Create a new Dompdf instance
        $dompdf = new Dompdf();

        // Load the HTML content into Dompdf
        $dompdf->loadHtml($html);

        // Set paper size and orientation if needed
        $dompdf->setPaper('A4', 'portrait');

        // Render the PDF
        $dompdf->render();

        // Set the PDF file name
        $filename = 'statement_' . $displayDate . '.pdf';

        // Output the generated PDF for download
        return $dompdf->stream($filename);
    }



    public function insertExpenses(Request $request)
    {
        // Validate the form input
        $validatedData = $request->validate([
            'expense_date' => 'required|date',
            'expense_name' => 'required|string',
            'expense_amount' => 'required|numeric|min:0',
        ]);

        $expenseDate = Carbon::createFromFormat('d-m-Y', $validatedData['expense_date'])->format('Y-m-d');
        $expenseName = $validatedData['expense_name'];
        $expenseAmount = $validatedData['expense_amount'];

        // Create a new account entry with the expense details
        $account = new Account;
        $account->expense_name = $expenseName;
        $account->expense_date = $expenseDate;
        $account->expense_amount = $expenseAmount;

        $account->save();

        // Perform any additional actions or redirection
        return redirect('/account/add-expenses')->with('success', 'Expense added successfully.');
    }



    public function getExpenses(Request $request)
    {
        $date = $request->input('date');

        // Convert the selected date to the database format (Y-m-d)
        $formattedDate = Carbon::createFromFormat('d-m-Y', $date)->format('Y-m-d');

        // Fetch expenses from the database based on the formatted date
        $expenses = Account::whereDate('expense_date', $formattedDate)
            ->select('expense_name', 'expense_amount')
            ->get();

        // Pass the expenses data to the view
        return response()->json($expenses);
    }



}
