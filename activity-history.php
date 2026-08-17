<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transactions</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Menu -->

    <div class="sidebar">
        <div class="logo">Smart<span>Accounts</span></div>
        <ul class="menu">

            <li>📊 Dashboard</li>
            <li class="active">💰 Transactions</li>
            <li>🔄 Reconciliation</li>
            <li>📑 Financial Reports</li>

        </ul>
    </div>

    <!-- Main-->

    <main>
        <div class="topbar">

            <h1>Transactions</h1>
            <div class="user">Account Name</div>

        </div>

        <div>
            <div class="toggle-bar">

                <button
                    class="transactions-btn"
                    onclick="openForm('expense')">

                    Transactions

                </button>

                <button
                    class="transactions-btn"
                    onclick="openForm('expense')">

                    Pending Activity

                </button>

                <button
                    class="transactions-btn"
                    onclick="openForm('expense')">

                    Create Expense

                </button>


                <button
                    class="transactions-btn"
                    onclick="openForm('revenue')">

                    Create Revenue

                </button>

                <button
                    class="transactions-btn"
                    onclick="openForm('expense')">

                    Activity History

                </button>
            </div>

            <div>


                <!-- LEFT SIDE -->

                <div>

                    <!-- TRANSACTIONS -->

                    <div class="transactions-table">

                        <h3>Recent Transactions</h3>

                        <table>

                            <thead>

                                <tr>

                                    <th>Date</th>

                                    <th>Description</th>

                                    <th>Category</th>

                                    <th>Amount</th>

                                    <th>Type</th>

                                    <th>Created By</th>

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
                                        Revenue
                                    </td>

                                    <td>
                                        John Mensah
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
                                        Expense
                                    </td>

                                    <td>
                                        John Mensah
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
                                        Expense
                                    </td>

                                    <td>
                                        John Mensah
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
                                        Revenue
                                    </td>

                                    <td>
                                        John Mensah
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
                </div>
            </div>
    </main>


</body>

</html>