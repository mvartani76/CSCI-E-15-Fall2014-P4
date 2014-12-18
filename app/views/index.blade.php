@extends('master')

@section('title')
	Welcome to the Financial Valuation Web App
@stop

@section('head')

@stop

@section('content')

	<div class="container">
        <div class="well">
            <h2 class= "text-primary">Financial Valuation Web App Description</h2>
            <blockquote>This web application utilizes the Laravel framework and blade templating to create
                a web based application for financial valuation of projects. I have done quite a bit of work in this
                area and much of it has been done using excel spreadsheets. A cloud based web application could really
                be useful and speed up/reduce errors when putting project valuations together.</br></br>

                This web application allows users register/login to the website, create/edit/view/delete projects,
                add/view/delete comments about those projects, add/view/edit/delete revenues/expenses, and view/edit
                project properties.<br><br>

                There are several tables used in this application: users, projects, revenues, revenue_types, expenses,
                expense_types, comments, permissions, and the associated pivot tables. 
            </blockquote>
            <a href='/user-login' class="btn btn-warning btn-block">Login/Signup</a>
        </div>
        <div class="well">
            <h2 class= "text-success">Remaining Work</h2>
            <blockquote>Due to time constraints, I was not able to implement everything that I initially set out to
                do. First and foremost, the valuation calculations took a short cut. I only used revenues and expenses
                although they should probably be separated further into COGS, SG&A, and R&D as well as non-cash based expenses.
                I didn't include any of the non-cash items in the calculation.<br><br>
                Second, I think it would be much easier to enter the revenues/expenses as an array of numbers instead of just
                one number per year. The add-revenue and add-expense pages currently only add a revenue/expense for one year.<br><br>
                Third, I need to clean up the tables in the database that are no longer used. I initially thought to use a proforma
                table that combined revenues and expenses but decided to ditch that idea.<br><br>
                Fourth, I would like to add some search functionality and sorting functionality.<br><br>
                Fifth, I would like to update the user-dashboard page... Actually have the task section be functional,
                and maybe show some graphical statistics about user usage on the page..?
            </blockquote>
        </div>
    </div>
@stop