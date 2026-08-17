<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Transactions | SmartAccounts</title>

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


        /* =========================
           SIDEBAR
        ========================= */

        .sidebar {
            position: fixed;

            left: 0;
            top: 0;

            width: 240px;
            height: 100vh;

            background: #393d3f;

            color: white;

            padding: 25px 15px;

            z-index: 100;
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

            transition: 0.2s;
        }


        .menu li:hover,
        .menu .active {
            background: #534b52;
        }


        /* =========================
           MAIN
        ========================= */

        main {
            margin-left: 240px;

            min-height: 100vh;

            padding-bottom: 40px;
        }


        /* =========================
           TOPBAR
        ========================= */

        .topbar {
            height: 85px;

            background: #393d3f;

            color: white;

            display: flex;

            justify-content: space-between;

            align-items: center;

            padding: 0 25px;

            margin-bottom: 25px;

            border-radius: 0 0 12px 12px;
        }


        .topbar h1 {
            font-size: 25px;
        }


        .user {
            background: #534b52;

            padding: 10px 16px;

            border-radius: 25px;

            font-size: 14px;
        }


        /* =========================
           PAGE CONTENT
        ========================= */

        .content {
            padding: 0 25px;
        }


        /* =========================
           ACTION BAR
        ========================= */

        .action-bar {
            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 20px;
        }


        .action-bar h2 {
            font-size: 21px;
        }


        .buttons {
            display: flex;

            gap: 10px;
        }


        button {
            border: none;

            padding: 11px 16px;

            border-radius: 7px;

            cursor: pointer;

            font-size: 14px;

            transition: 0.2s;
        }


        .expense-btn {
            background: #e74c3c;

            color: white;
        }


        .expense-btn:hover {
            background: #c0392b;
        }


        .revenue-btn {
            background: #27ae60;

            color: white;
        }


        .revenue-btn:hover {
            background: #219150;
        }


        /* =========================
           FILTER BAR
        ========================= */

        .filters {
            background: white;

            padding: 16px;

            border-radius: 10px;

            display: flex;

            gap: 12px;

            margin-bottom: 20px;

            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }


        .filters input,
        .filters select {

            padding: 10px;

            border: 1px solid #ddd;

            border-radius: 6px;

            outline: none;

            flex: 1;
        }


        /* =========================
           TABLE
        ========================= */

        .table-container {

            background: white;

            border-radius: 10px;

            overflow-x: auto;

            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }


        table {

            width: 100%;

            border-collapse: collapse;
        }


        th,
        td {

            padding: 15px;

            text-align: left;

            border-bottom: 1px solid #eee;

            font-size: 14px;
        }


        th {

            color: #777;

            font-size: 13px;

            background: #fafafa;
        }


        tr:hover {

            background: #fafafa;
        }


        .income {

            color: #27ae60;

            font-weight: bold;
        }


        .expense {

            color: #e74c3c;

            font-weight: bold;
        }


        /* =========================
           STATUS
        ========================= */

        .status {

            padding: 5px 9px;

            border-radius: 15px;

            font-size: 12px;
        }


        .pending {

            background: #fff4d6;

            color: #b77900;
        }


        .recorded {

            background: #e8f8ef;

            color: #27ae60;
        }


        .rejected {

            background: #fdecea;

            color: #e74c3c;
        }


        /* =========================
           REVIEW BUTTON
        ========================= */

        .review-btn {

            background: #534b52;

            color: white;

            padding: 7px 10px;

            font-size: 12px;
        }


        .review-btn:hover {

            background: #393d3f;
        }


        /* =========================
           MODAL
        ========================= */

        .modal {

            display: none;

            position: fixed;

            inset: 0;

            background: rgba(0, 0, 0, 0.5);

            align-items: center;

            justify-content: center;

            z-index: 200;
        }


        .modal-content {

            background: white;

            width: 500px;

            max-width: 90%;

            border-radius: 12px;

            padding: 25px;

            max-height: 90vh;

            overflow-y: auto;
        }


        .modal-header {

            display: flex;

            justify-content: space-between;

            align-items: center;

            margin-bottom: 20px;
        }


        .close {

            font-size: 25px;

            cursor: pointer;

            color: #777;
        }


        /* =========================
           FORM
        ========================= */

        .form-group {

            margin-bottom: 16px;
        }


        .form-group label {

            display: block;

            margin-bottom: 7px;

            font-size: 13px;

            font-weight: bold;

            color: #555;
        }


        .form-group input,
        .form-group select,
        .form-group textarea {

            width: 100%;

            padding: 11px;

            border: 1px solid #ddd;

            border-radius: 6px;

            outline: none;
        }


        .form-group textarea {

            height: 80px;

            resize: vertical;
        }


        .category-box {

            background: #f1f7f3;

            border-left: 4px solid #27ae60;

            padding: 12px;

            border-radius: 5px;

            font-size: 13px;
        }


        .category-box strong {

            color: #27ae60;
        }


        .submit-btn {

            width: 100%;

            background: #393d3f;

            color: white;

            margin-top: 10px;
        }


        .submit-btn:hover {

            background: #534b52;
        }


        /* =========================
           ACCOUNTANT REVIEW
        ========================= */

        .review-section {

            background: #f7f7f7;

            padding: 15px;

            border-radius: 8px;

            margin-top: 15px;
        }


        .review-section select {

            width: 100%;

            padding: 10px;

            margin-top: 8px;
        }


        .review-actions {

            display: flex;

            gap: 10px;

            margin-top: 15px;
        }


        .approve {

            background: #27ae60;

            color: white;

            flex: 1;
        }


        .reject {

            background: #e74c3c;

            color: white;

            flex: 1;
        }


        /* =========================
           EMPTY STATE
        ========================= */

        .empty {

            text-align: center;

            padding: 50px;

            color: #888;
        }


        @media(max-width: 900px) {

            .sidebar {

                width: 200px;
            }

            main {

                margin-left: 200px;
            }

            .filters {

                flex-wrap: wrap;
            }

        }
    </style>

</head>


<body>


    <!-- =========================
         SIDEBAR
    ========================= -->

    <aside class="sidebar">

        <div class="logo">
            Smart<span>Accounts</span>
        </div>


        <ul class="menu">

            <li>📊 Dashboard</li>

            <li class="active">💰 Transactions</li>

            <li>🔄 Reconciliation</li>

            <li>📑 Financial Reports</li>

            <li>📁 Accounts</li>

        </ul>

    </aside>



    <!-- =========================
         MAIN
    ========================= -->

    <main>


        <header class="topbar">

            <h1>Transactions</h1>

            <div class="user">
                Accountant
            </div>

        </header>



        <div class="content">


            <!-- ACTION BAR -->

            <div class="action-bar">

                <h2>Recent Transactions</h2>


                <div class="buttons">

                    <button
                        class="expense-btn"
                        onclick="openForm('expense')">

                        + Create Expense

                    </button>


                    <button
                        class="revenue-btn"
                        onclick="openForm('revenue')">

                        + Create Revenue

                    </button>

                </div>

            </div>



            <!-- FILTERS -->

            <div class="filters">

                <input
                    type="text"
                    id="search"
                    placeholder="Search transactions..."
                    oninput="renderTransactions()">


                <select
                    id="typeFilter"
                    onchange="renderTransactions()">

                    <option value="all">All Types</option>

                    <option value="revenue">Revenue</option>

                    <option value="expense">Expense</option>

                </select>


                <select
                    id="statusFilter"
                    onchange="renderTransactions()">

                    <option value="all">All Status</option>

                    <option value="pending">Pending</option>

                    <option value="recorded">Recorded</option>

                    <option value="rejected">Rejected</option>

                </select>

            </div>



            <!-- TABLE -->

            <div class="table-container">

                <table>

                    <thead>

                        <tr>

                            <th>Date</th>

                            <th>Description</th>

                            <th>Category</th>

                            <th>Type</th>

                            <th>Amount</th>

                            <th>Created By</th>

                            <th>Status</th>

                            <th>Action</th>

                        </tr>

                    </thead>


                    <tbody id="transactionTable">

                    </tbody>

                </table>

            </div>


        </div>

    </main>



    <!-- =========================
         CREATE TRANSACTION MODAL
    ========================= -->

    <div class="modal" id="transactionModal">


        <div class="modal-content">


            <div class="modal-header">

                <h2 id="formTitle">
                    Create Transaction
                </h2>

                <span
                    class="close"
                    onclick="closeModal()">

                    ×

                </span>

            </div>


            <form id="transactionForm">


                <div class="form-group">

                    <label>
                        Description
                    </label>

                    <input
                        type="text"
                        id="description"
                        placeholder="e.g. ECG electricity bill"
                        required
                        oninput="suggestCategory()">

                </div>


                <div class="form-group">

                    <label>
                        Amount (GH₵)
                    </label>

                    <input
                        type="number"
                        id="amount"
                        min="0.01"
                        step="0.01"
                        required>

                </div>


                <div class="form-group">

                    <label>
                        Date
                    </label>

                    <input
                        type="date"
                        id="date"
                        required>

                </div>


                <!-- AUTOMATIC CATEGORY -->

                <div class="form-group">

                    <label>
                        Category
                    </label>

                    <div
                        class="category-box"
                        id="categoryBox">

                        Start typing a description and
                        the system will suggest a category.

                    </div>

                </div>


                <div class="form-group">

                    <label>
                        Payment Method
                    </label>

                    <select id="paymentMethod">

                        <option value="Bank">
                            Bank
                        </option>

                        <option value="Cash">
                            Cash
                        </option>

                        <option value="Mobile Money">
                            Mobile Money
                        </option>

                    </select>

                </div>


                <div class="form-group">

                    <label>
                        Supporting Document
                    </label>

                    <input
                        type="file"
                        id="document">

                </div>


                <div class="form-group">

                    <label>
                        Notes
                    </label>

                    <textarea
                        id="notes"
                        placeholder="Additional information...">
                    </textarea>

                </div>


                <button
                    class="submit-btn"
                    type="submit">

                    Submit Transaction

                </button>


            </form>

        </div>

    </div>



    <!-- =========================
         REVIEW MODAL
    ========================= -->

    <div class="modal" id="reviewModal">

        <div class="modal-content">

            <div class="modal-header">

                <h2>
                    Review Transaction
                </h2>

                <span
                    class="close"
                    onclick="closeReview()">

                    ×

                </span>

            </div>


            <div id="reviewDetails"></div>


            <div class="review-section">

                <strong>
                    Accountant Classification
                </strong>

                <select id="accountantCategory">

                    <option>
                        Sales Revenue
                    </option>

                    <option>
                        Service Revenue
                    </option>

                    <option>
                        Electricity Expense
                    </option>

                    <option>
                        Rent Expense
                    </option>

                    <option>
                        Salaries Expense
                    </option>

                    <option>
                        Transport Expense
                    </option>

                    <option>
                        Office Supplies Expense
                    </option>

                    <option>
                        Computer Equipment
                    </option>

                    <option>
                        Other Expense
                    </option>

                </select>


                <div class="review-actions">

                    <button
                        class="approve"
                        onclick="approveTransaction()">

                        ✓ Record Transaction

                    </button>


                    <button
                        class="reject"
                        onclick="rejectTransaction()">

                        ✕ Reject

                    </button>

                </div>

            </div>

        </div>

    </div>



    <script>
        /* =========================================
           DEMO USER ROLE
        ========================================= */

        /*
           Change this to "user" to simulate
           an ordinary employee.

           Use "accountant" to see all transactions.
        */

        const currentRole = "accountant";

        const currentUser = "John Mensah";


        /* =========================================
           SAMPLE TRANSACTIONS
        ========================================= */

        let transactions =
            JSON.parse(
                localStorage.getItem("smartAccountsTransactions")
            ) || [

                {
                    id: 1,

                    date: "2026-08-16",

                    description: "ECG electricity bill",

                    category: "Electricity Expense",

                    type: "expense",

                    amount: 750,

                    user: "John Mensah",

                    status: "pending"

                },

                {
                    id: 2,

                    date: "2026-08-15",

                    description: "Laptop sale",

                    category: "Sales Revenue",

                    type: "revenue",

                    amount: 8000,

                    user: "Ama Mensah",

                    status: "recorded"

                },

                {
                    id: 3,

                    date: "2026-08-14",

                    description: "Office rent",

                    category: "Rent Expense",

                    type: "expense",

                    amount: 4000,

                    user: "John Mensah",

                    status: "recorded"

                }

            ];


        let selectedTransaction = null;

        let currentFormType = null;



        /* =========================================
           SAVE DATA
        ========================================= */

        function saveTransactions() {

            localStorage.setItem(
                "smartAccountsTransactions",
                JSON.stringify(transactions)
            );

        }



        /* =========================================
           OPEN FORM
        ========================================= */

        function openForm(type) {

            currentFormType = type;

            document.getElementById("transactionModal")
                .style.display = "flex";


            document.getElementById("formTitle")
                .textContent =
                type === "expense" ?
                "Create Expense" :
                "Create Revenue";


            document.getElementById("transactionForm")
                .reset();


            document.getElementById("categoryBox")
                .innerHTML =
                "Start typing a description and the system will suggest a category.";


            document.getElementById("date")
                .value =
                new Date().toISOString().split("T")[0];

        }



        function closeModal() {

            document.getElementById("transactionModal")
                .style.display = "none";

        }



        /* =========================================
           INTELLIGENT CATEGORY SUGGESTION
        ========================================= */

        function suggestCategory() {

            const text =
                document.getElementById("description")
                .value
                .toLowerCase();


            let category = "";


            if (
                text.includes("ecg") ||
                text.includes("electricity") ||
                text.includes("power")
            ) {

                category = "Electricity Expense";

            } else if (
                text.includes("rent") ||
                text.includes("office building")
            ) {

                category = "Rent Expense";

            } else if (
                text.includes("salary") ||
                text.includes("wages")
            ) {

                category = "Salaries Expense";

            } else if (
                text.includes("transport") ||
                text.includes("fuel") ||
                text.includes("taxi")
            ) {

                category = "Transport Expense";

            } else if (
                text.includes("stationery") ||
                text.includes("pen") ||
                text.includes("paper") ||
                text.includes("office supplies")
            ) {

                category = "Office Supplies Expense";

            } else if (
                text.includes("laptop") ||
                text.includes("computer") ||
                text.includes("printer")
            ) {

                category = "Computer Equipment";

            } else if (
                currentFormType === "revenue" &&
                (
                    text.includes("sale") ||
                    text.includes("sold") ||
                    text.includes("customer")
                )
            ) {

                category = "Sales Revenue";

            } else if (
                currentFormType === "revenue"
            ) {

                category = "Sales Revenue";

            } else {

                category = "Other Expense";

            }


            document.getElementById("categoryBox")
                .innerHTML =

                `
                <strong>Suggested category:</strong>
                ${category}
                `;


            return category;

        }



        /* =========================================
           SUBMIT TRANSACTION
        ========================================= */

        document.getElementById("transactionForm")
            .addEventListener("submit", function(event) {

                event.preventDefault();


                const description =
                    document.getElementById("description")
                    .value;


                const amount =
                    parseFloat(
                        document.getElementById("amount")
                        .value
                    );


                const date =
                    document.getElementById("date")
                    .value;


                const category =
                    suggestCategory();


                const newTransaction = {

                    id: Date.now(),

                    date: date,

                    description: description,

                    category: category,

                    type: currentFormType,

                    amount: amount,

                    user: currentUser,

                    status: "pending"

                };


                transactions.unshift(newTransaction);


                saveTransactions();


                closeModal();


                renderTransactions();


                alert(
                    "Transaction submitted successfully. It is now PENDING accountant verification."
                );

            });



        /* =========================================
           DISPLAY TRANSACTIONS
        ========================================= */

        function renderTransactions() {

            const table =
                document.getElementById("transactionTable");


            const search =
                document.getElementById("search")
                .value
                .toLowerCase();


            const type =
                document.getElementById("typeFilter")
                .value;


            const status =
                document.getElementById("statusFilter")
                .value;


            let visibleTransactions =
                transactions.filter(transaction => {


                    /*
                       USER:
                       Only sees own transactions.

                       ACCOUNTANT:
                       Sees everybody's transactions.
                    */

                    if (
                        currentRole === "user" &&
                        transaction.user !== currentUser
                    ) {

                        return false;

                    }


                    if (
                        search &&
                        !transaction.description
                        .toLowerCase()
                        .includes(search)
                    ) {

                        return false;

                    }


                    if (
                        type !== "all" &&
                        transaction.type !== type
                    ) {

                        return false;

                    }


                    if (
                        status !== "all" &&
                        transaction.status !== status
                    ) {

                        return false;

                    }


                    return true;

                });


            table.innerHTML = "";


            if (visibleTransactions.length === 0) {

                table.innerHTML = `

                    <tr>

                        <td
                            colspan="8"
                            class="empty">

                            No transactions found.

                        </td>

                    </tr>

                `;

                return;

            }


            visibleTransactions.forEach(transaction => {


                const amountClass =
                    transaction.type === "revenue" ?
                    "income" :
                    "expense";


                const amountSign =
                    transaction.type === "revenue" ?
                    "+" :
                    "-";


                table.innerHTML += `

                    <tr>

                        <td>
                            ${transaction.date}
                        </td>

                        <td>
                            ${transaction.description}
                        </td>

                        <td>
                            ${transaction.category}
                        </td>

                        <td>
                            ${capitalize(transaction.type)}
                        </td>

                        <td class="${amountClass}">

                            ${amountSign}
                            GH₵
                            ${transaction.amount.toLocaleString()}

                        </td>

                        <td>
                            ${transaction.user}
                        </td>

                        <td>

                            <span
                                class="status ${transaction.status}">

                                ${capitalize(transaction.status)}

                            </span>

                        </td>

                        <td>

                            ${
                                currentRole === "accountant"
                                ?

                                `<button
                                    class="review-btn"
                                    onclick="reviewTransaction(${transaction.id})">

                                    Review

                                </button>`

                                :

                                `<button
                                    class="review-btn"
                                    onclick="viewTransaction(${transaction.id})">

                                    View

                                </button>`
                            }

                        </td>

                    </tr>

                `;

            });

        }



        /* =========================================
           ACCOUNTANT REVIEW
        ========================================= */

        function reviewTransaction(id) {

            selectedTransaction =
                transactions.find(
                    transaction =>
                    transaction.id === id
                );


            if (!selectedTransaction) return;


            document.getElementById("reviewModal")
                .style.display = "flex";


            document.getElementById("reviewDetails")
                .innerHTML = `

                <p>
                    <strong>Description:</strong>
                    ${selectedTransaction.description}
                </p>

                <p style="margin-top:10px;">
                    <strong>Amount:</strong>
                    GH₵ ${selectedTransaction.amount.toLocaleString()}
                </p>

                <p style="margin-top:10px;">
                    <strong>Type:</strong>
                    ${capitalize(selectedTransaction.type)}
                </p>

                <p style="margin-top:10px;">
                    <strong>System category:</strong>
                    ${selectedTransaction.category}
                </p>

                <p style="margin-top:10px;">
                    <strong>Submitted by:</strong>
                    ${selectedTransaction.user}
                </p>

                `;


            document.getElementById("accountantCategory")
                .value =
                selectedTransaction.category;

        }



        function closeReview() {

            document.getElementById("reviewModal")
                .style.display = "none";

        }



        /* =========================================
           APPROVE / RECORD
        ========================================= */

        function approveTransaction() {

            if (!selectedTransaction) return;


            const finalCategory =
                document.getElementById("accountantCategory")
                .value;


            selectedTransaction.category =
                finalCategory;


            selectedTransaction.status =
                "recorded";


            saveTransactions();


            closeReview();


            renderTransactions();


            alert(
                "Transaction has been recorded. It will now contribute to the official financial figures."
            );

        }



        /* =========================================
           REJECT
        ========================================= */

        function rejectTransaction() {

            if (!selectedTransaction) return;


            selectedTransaction.status =
                "rejected";


            saveTransactions();


            closeReview();


            renderTransactions();


            alert(
                "Transaction rejected. It will NOT affect the official financial figures."
            );

        }



        /* =========================================
           USER VIEW
        ========================================= */

        function viewTransaction(id) {

            const transaction =
                transactions.find(
                    t => t.id === id
                );


            if (!transaction) return;


            alert(

                "Transaction\n\n" +

                "Description: " +
                transaction.description +

                "\nAmount: GH₵" +
                transaction.amount +

                "\nCategory: " +
                transaction.category +

                "\nStatus: " +
                transaction.status

            );

        }



        /* =========================================
           HELPER
        ========================================= */

        function capitalize(text) {

            return text.charAt(0).toUpperCase() +
                text.slice(1);

        }



        /* =========================================
           INITIAL LOAD
        ========================================= */

        renderTransactions();
    </script>

</body>

</html>