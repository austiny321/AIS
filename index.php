<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Accounts</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <!-- Menu -->

    <div class="sidebar">
        <div class="logo">Smart<span>Accounts</span></div>
        <ul class="menu">

            <li class=" active" onclick="window.location.href='index.php'">📊 Dashboard</li>
            <li onclick="window.location.href='transactions.php'">💰 Transactions</li>
            <li onclick="window.location.href='reconciliation.php'">🔄 Reconciliation</li>
            <li onclick="window.location.href='report.php'">📑 Financial Reports</li>

        </ul>
    </div>

    <!-- Main-->

    <main>
        <div class="topbar">

            <h1>Financial Dashboard</h1>
            <div class="user">Account Name</div>

        </div>


        <!-- FINANCIAL SUMMARY -->

        <div class="cards">

            <div class="card">

                <h4>Total Revenue</h4>

                <h2 class="green">
                    GH₵ 100,000
                </h2>

            </div>


            <div class="card">

                <h4>Total Expenses</h4>

                <h2 class="red">
                    GH₵ 60,000
                </h2>

            </div>


            <div class="card">

                <h4>Net Profit</h4>

                <h2 class="blue">
                    GH₵ 40,000
                </h2>

            </div>


            <div class="card">

                <h4>Bank Balance</h4>

                <h2>
                    GH₵ 25,000
                </h2>

            </div>

        </div>

        <div class="content-grid">


            <!-- LEFT SIDE -->

            <div>

                <!-- TRANSACTIONS -->

                <div class="panel">

                    <h3>Recent Transactions</h3>

                    <table>

                        <thead>

                            <tr>

                                <th>Date</th>

                                <th>Description</th>

                                <th>Category</th>

                                <th>Amount</th>

                                <th>Status</th>

                                <!--Will Include Number of items and Total Amount later-->

                            </tr>

                        </thead>

                        <tbody>

                            <tr>

                                <td>15 Aug</td>

                                <td>Laptop Sale</td>

                                <td>Sales Revenue</td>

                                <td class="green">
                                    +GH₵ 8,000
                                </td>

                                <td>
                                    <span class="badge income">
                                        Pending
                                    </span>
                                </td>

                            </tr>


                            <tr>

                                <td>14 Aug</td>

                                <td>ECG Bill</td>

                                <td>Electricity</td>

                                <td class="red">
                                    -GH₵ 750
                                </td>

                                <td>
                                    <span class="badge income">
                                        Approved
                                    </span>
                                </td>

                            </tr>


                            <tr>

                                <td>13 Aug</td>

                                <td>Office Rent</td>

                                <td>Rent Expense</td>

                                <td class="red">
                                    -GH₵ 4,000
                                </td>

                                <td>
                                    <span class="badge income">
                                        Rejeced
                                    </span>
                                </td>

                            </tr>


                            <tr>

                                <td>12 Aug</td>

                                <td>Customer Payment</td>

                                <td>Accounts Receivable</td>

                                <td class="green">
                                    +GH₵ 2,000
                                </td>

                                <td>
                                    <span class="badge income">
                                        Pending
                                    </span>
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>



                <!-- RECONCILIATION -->

                <div class="panel">

                    <h3>Reconciliation</h3>

                    <div class="alert">

                        ⚠️

                        <strong>
                            1 unmatched transaction
                        </strong>

                        <br><br>

                        Bank statement contains:

                        <br>

                        <strong>
                            GH₵500 Bank Charge
                        </strong>

                        <br><br>

                        This transaction was not found
                        in your accounting records.

                    </div>

                    <button>
                        Review Transaction
                    </button>

                </div>
            </div>


            <!-- RIGHT SIDE -->

            <div>

                <!-- FINANCIAL HEALTH -->

                <div class="panel">

                    <h3>Financial Insight</h3>

                    <div class="success">

                        <strong>
                            Business Performance
                        </strong>

                        <br><br>

                        Revenue increased by

                        <strong>
                            18%
                        </strong>

                        compared with last month.

                    </div>

                </div>


                <!-- REPORTS -->

                <div class="panel">

                    <h3>Reports</h3>

                    <button>
                        Income Statement
                    </button>

                    <br><br>

                    <button>
                        Balance Sheet
                    </button>

                    <br><br>

                    <button>
                        Cash Flow Statement
                    </button>

                </div>
            </div>
        </div>
    </main>

</body>

</html>