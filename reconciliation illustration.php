<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">

    <title>Reconciliation</title>

    <link rel="stylesheet"
        href="style.css">

</head>


<body>


    <!-- SIDEBAR -->

    <div class="sidebar">

        <div class="logo">
            Smart<span>Accounts</span>
        </div>


        <ul class="menu">

            <li>📊 Dashboard</li>

            <li>💰 Transactions</li>

            <li class="active">
                🔄 Reconciliation
            </li>

            <li>📑 Financial Reports</li>

        </ul>

    </div>



    <!-- MAIN -->

    <main>


        <!-- TOPBAR -->

        <div class="topbar">

            <h1>
                Reconciliation
            </h1>

            <div class="user">
                Accountant
            </div>

        </div>



        <div class="reconciliation-content">


            <!-- CONTROLS -->

            <div class="reconciliation-controls">

                <div>

                    <label>
                        Account
                    </label>

                    <select>

                        <option>
                            Main Business Bank Account
                        </option>

                        <option>
                            Petty Cash
                        </option>

                    </select>

                </div>


                <div>

                    <label>
                        Period
                    </label>

                    <select>

                        <option>
                            August 2026
                        </option>

                        <option>
                            July 2026
                        </option>

                        <option>
                            June 2026
                        </option>

                    </select>

                </div>


                <button class="import-btn">

                    + Import Bank Statement

                </button>

            </div>



            <!-- SUMMARY CARDS -->

            <div class="reconciliation-cards">


                <div class="reconciliation-card">

                    <h4>
                        Transactions
                    </h4>

                    <h2>
                        125
                    </h2>

                    <p>
                        Transactions being checked
                    </p>

                </div>



                <div class="reconciliation-card">

                    <h4>
                        Matched
                    </h4>

                    <h2 class="green">
                        117
                    </h2>

                    <p>
                        Successfully matched
                    </p>

                </div>



                <div class="reconciliation-card">

                    <h4>
                        Discrepancies
                    </h4>

                    <h2 class="red">
                        8
                    </h2>

                    <p>
                        Need investigation
                    </p>

                </div>



                <div class="reconciliation-card">

                    <h4>
                        Match Rate
                    </h4>

                    <h2 class="blue">
                        93.6%
                    </h2>

                    <p>
                        Reconciliation progress
                    </p>

                </div>

            </div>



            <!-- BALANCE COMPARISON -->

            <div class="balance-section">

                <h3>
                    Balance Comparison
                </h3>


                <div class="balance-grid">


                    <div>

                        <span>
                            Bank Statement Balance
                        </span>

                        <strong>
                            GH₵ 48,500
                        </strong>

                    </div>


                    <div>

                        <span>
                            System Balance
                        </span>

                        <strong>
                            GH₵ 47,900
                        </strong>

                    </div>


                    <div class="difference">

                        <span>
                            Difference
                        </span>

                        <strong>
                            GH₵ 600
                        </strong>

                    </div>

                </div>

            </div>



            <!-- DISCREPANCIES -->

            <div class="transactions-table">

                <div class="table-heading">

                    <h3>
                        Transactions Requiring Attention
                    </h3>

                    <button class="filter-btn">
                        Filter
                    </button>

                </div>


                <table>

                    <thead>

                        <tr>

                            <th>
                                Date
                            </th>

                            <th>
                                Description
                            </th>

                            <th>
                                System Amount
                            </th>

                            <th>
                                Bank Amount
                            </th>

                            <th>
                                Difference
                            </th>

                            <th>
                                Status
                            </th>

                            <th>
                                Action
                            </th>

                        </tr>

                    </thead>


                    <tbody>


                        <tr>

                            <td>
                                16 Aug
                            </td>

                            <td>
                                Office Rent
                            </td>

                            <td>
                                GH₵ 4,000
                            </td>

                            <td>
                                GH₵ 4,500
                            </td>

                            <td class="red">
                                GH₵ 500
                            </td>

                            <td>

                                <span class="badge warning">
                                    Difference
                                </span>

                            </td>

                            <td>

                                <button class="review-btn">
                                    Review
                                </button>

                            </td>

                        </tr>



                        <tr>

                            <td>
                                17 Aug
                            </td>

                            <td>
                                Supplier Payment
                            </td>

                            <td>
                                GH₵ 2,000
                            </td>

                            <td>
                                GH₵ 1,900
                            </td>

                            <td class="red">
                                GH₵ 100
                            </td>

                            <td>

                                <span class="badge warning">
                                    Difference
                                </span>

                            </td>

                            <td>

                                <button class="review-btn">
                                    Review
                                </button>

                            </td>

                        </tr>



                        <tr>

                            <td>
                                17 Aug
                            </td>

                            <td>
                                Bank Charge
                            </td>

                            <td>
                                GH₵ 0
                            </td>

                            <td>
                                GH₵ 50
                            </td>

                            <td class="red">
                                GH₵ 50
                            </td>

                            <td>

                                <span class="badge missing">
                                    Missing Record
                                </span>

                            </td>

                            <td>

                                <button class="review-btn">
                                    Review
                                </button>

                            </td>

                        </tr>


                    </tbody>

                </table>

            </div>


        </div>

    </main>

</body>

</html>