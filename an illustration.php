<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Accounting System</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body {
            background: #f4f6f9;
            color: #333;
        }

        /* SIDEBAR */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 240px;
            height: 100vh;
            background: #172033;
            color: white;
            padding: 25px 15px;
        }

        .logo {
            font-size: 21px;
            font-weight: bold;
            margin-bottom: 35px;
            padding-left: 10px;
        }

        .logo span {
            color: #4caf50;
        }

        .menu {
            list-style: none;
        }

        .menu li {
            padding: 14px 12px;
            margin-bottom: 5px;
            border-radius: 6px;
            cursor: pointer;
        }

        .menu li:hover,
        .menu .active {
            background: #263653;
        }

        /* MAIN CONTENT */

        .main {
            margin-left: 240px;
            padding: 25px;
        }

        .topbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 30px;
        }

        .topbar h1 {
            font-size: 26px;
        }

        .user {
            background: white;
            padding: 10px 15px;
            border-radius: 8px;
        }

        /* CARDS */

        .cards {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 25px;
        }

        .card {
            background: white;
            padding: 22px;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.06);
        }

        .card h4 {
            color: #777;
            margin-bottom: 12px;
        }

        .card h2 {
            font-size: 25px;
        }

        .green {
            color: #27ae60;
        }

        .red {
            color: #e74c3c;
        }

        .blue {
            color: #2980b9;
        }

        /* CONTENT GRID */

        .content-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 20px;
        }

        .panel {
            background: white;
            padding: 22px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        .panel h3 {
            margin-bottom: 20px;
        }

        /* TABLE */

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            text-align: left;
            padding: 13px;
            border-bottom: 1px solid #eee;
        }

        th {
            color: #777;
            font-size: 14px;
        }

        /* BADGES */

        .badge {
            padding: 5px 9px;
            border-radius: 15px;
            font-size: 12px;
        }

        .income {
            background: #e8f8ef;
            color: #27ae60;
        }

        .expense {
            background: #fdecea;
            color: #e74c3c;
        }

        /* INTELLIGENCE */

        .alert {
            padding: 15px;
            background: #fff4d6;
            border-left: 4px solid #f1c40f;
            border-radius: 5px;
            margin-bottom: 12px;
        }

        .success {
            padding: 15px;
            background: #e8f8ef;
            border-left: 4px solid #27ae60;
            border-radius: 5px;
        }

        /* BUTTON */

        button {
            background: #2980b9;
            border: none;
            color: white;
            padding: 10px 16px;
            border-radius: 6px;
            cursor: pointer;
        }

        button:hover {
            background: #216a9a;
        }

        /* RESPONSIVE */

        @media(max-width: 900px) {

            .sidebar {
                width: 190px;
            }

            .main {
                margin-left: 190px;
            }

            .cards {
                grid-template-columns: repeat(2, 1fr);
            }

            .content-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <!-- SIDEBAR -->

    <div class="sidebar">

        <div class="logo">
            Smart<span>Accounts</span>
        </div>

        <ul class="menu">

            <li class="active">📊 Dashboard</li>

            <li>💰 Transactions</li>

            <li>🧠 Classification</li>

            <li>🔄 Reconciliation</li>

            <li>📑 Financial Reports</li>

            <li>📁 Accounts</li>

            <li>⚙ Settings</li>

        </ul>

    </div>


    <!-- MAIN CONTENT -->

    <div class="main">

        <div class="topbar">

            <h1>Financial Dashboard</h1>

            <div class="user">
                👤 Accountant
            </div>

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
                                        Recorded
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
                                    <span class="badge expense">
                                        Expense
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
                                    <span class="badge expense">
                                        Expense
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
                                        Recorded
                                    </span>
                                </td>

                            </tr>

                        </tbody>

                    </table>

                </div>


                <!-- INTELLIGENT CLASSIFICATION -->

                <div class="panel">

                    <h3>🧠 Intelligent Classification</h3>

                    <div class="alert">

                        <strong>Suggested Classification</strong>

                        <br><br>

                        Transaction:

                        <strong>
                            "Paid ECG electricity bill GH₵750"
                        </strong>

                        <br><br>

                        Suggested Account:

                        <strong>
                            Electricity Expense
                        </strong>

                        <br><br>

                        Confidence:
                        <strong>96%</strong>

                        <br><br>

                        <button onclick="confirmClassification()">
                            Confirm Classification
                        </button>

                    </div>

                </div>

            </div>


            <!-- RIGHT SIDE -->

            <div>


                <!-- RECONCILIATION -->

                <div class="panel">

                    <h3>🔄 Reconciliation</h3>

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


                <!-- FINANCIAL HEALTH -->

                <div class="panel">

                    <h3>📈 Financial Insight</h3>

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

                    <h3>📑 Reports</h3>

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

    </div>


    <script>
        function confirmClassification() {

            alert(
                "Transaction successfully classified as Electricity Expense!"
            );

        }
    </script>

</body>

</html>