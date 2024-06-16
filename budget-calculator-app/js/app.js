$(document).ready(function () {
  let budgetAmount = 0;
  let expenseAmount = 0;
  let balanceAmount = 0;

  const budgetForm = $("#budget-form");
  const expenseForm = $("#expense-form");
  const budgetInput = $("#budget-input");
  const expenseInput = $("#expense-input");
  const amountInput = $("#amount-input");
  const budgetAmountSpan = $("#budget-amount");
  const expenseAmountSpan = $("#expense-amount");
  const balanceAmountSpan = $("#balance-amount");
  const balanceContainer = $("#balance");
  const balanceSign = $("#balance-sign");
  const budgetFeedback = $(".budget-feedback");
  const expenseFeedback = $(".expense-feedback");
  const expenseTable = $("#expense-table");

  budgetForm.submit(function (event) {
    event.preventDefault();
    const value = parseInt(budgetInput.val());
    if (value <= 0 || isNaN(value)) {
      budgetFeedback.addClass("showItem");
      budgetFeedback.text("Value cannot be empty or negative");
      setTimeout(function () {
        budgetFeedback.removeClass("showItem");
      }, 4000);
    } else {
      budgetAmount = value;
      budgetAmountSpan.text(budgetAmount);
      updateBalance();
      budgetInput.val("");
    }
  });

  expenseForm.submit(function (event) {
    event.preventDefault();
    const expenseTitle = expenseInput.val();
    const amount = parseInt(amountInput.val());

    if (expenseTitle === "" || amount <= 0 || isNaN(amount)) {
      expenseFeedback.addClass("showItem");
      expenseFeedback.text("Values cannot be empty or negative");
      setTimeout(function () {
        expenseFeedback.removeClass("showItem");
      }, 4000);
    } else {
      expenseAmount += amount;
      expenseAmountSpan.text(expenseAmount);
      updateBalance();

      if (expenseTable.find("tbody").length === 0) {
        expenseTable.append(`
                  <thead>
                      <tr>
                          <th>Expense Title</th>
                          <th>Expense Value</th>
                          <th>Edit/Delete</th>
                      </tr>
                  </thead>
                  <tbody></tbody>
              `);
      }

      const newRow = `
              <tr>
                  <td>-${expenseTitle}</td>
                  <td>-$${amount}</td>
                  <td>
                      <a href="#" class="edit-icon mx-2" data-title="${expenseTitle}" data-amount="${amount}" data-toggle="tooltip" data-placement="top" title="Edit">
                          <i class="fas fa-edit"></i>
                      </a>
                      <a href="#" class="delete-icon" data-amount="${amount}" data-toggle="tooltip" data-placement="top" title="Delete">
                          <i class="fas fa-trash"></i>
                      </a>
                  </td>
              </tr>
          `;

      expenseTable.find("tbody").append(newRow);

      expenseTable.find("tbody tr:last-child td").addClass("text-danger");

      expenseInput.val("");
      amountInput.val("");
    }
  });

  expenseTable.on("click", ".delete-icon", function (event) {
    event.preventDefault();
    const amount = parseInt($(this).data("amount"));

    expenseAmount -= amount;
    expenseAmountSpan.text(expenseAmount);
    updateBalance();

    $(this).closest("tr").remove();

    if (expenseTable.find("tbody tr").length === 0) {
      expenseTable.find("thead").remove();
    }
  });

  expenseTable.on("click", ".edit-icon", function (event) {
    event.preventDefault();
    const title = $(this).data("title");
    const amount = parseInt($(this).data("amount"));

    expenseInput.val(title);
    amountInput.val(amount);

    $(this).closest("tr").remove();

    expenseAmount -= amount;
    expenseAmountSpan.text(expenseAmount);
    updateBalance();
  });

  function updateBalance() {
    balanceAmount = budgetAmount - expenseAmount;
    balanceAmountSpan.text(balanceAmount);

    if (balanceAmount > 0) {
      balanceContainer.removeClass("showRed").addClass("showGreen");
      balanceSign.removeClass("showRed").addClass("showGreen");
    } else {
      balanceContainer.removeClass("showGreen").addClass("showRed");
      balanceSign.removeClass("showGreen").addClass("showRed");
    }
  }
});
