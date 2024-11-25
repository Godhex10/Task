document.querySelectorAll("[data-sortable]").forEach((column) => {
    column.addEventListener("dragend", (event) => {
      const taskId = event.target.getAttribute("data-id");
      const newStatus = column.closest(".task-list-container").getAttribute("data-item");
  
      if (taskId && newStatus) {
        fetch("update_task_status.php", {
          method: "POST",
          headers: { "Content-Type": "application/json" },
          body: JSON.stringify({ id: taskId, status: newStatus }),
        })
          .then((response) => response.json())
          .then((data) => {
            if (data.success) {
              console.log("Task updated successfully!");
            } else {
              console.error("Failed to update task:", data.error);
            }
          });
      }
    });
  });

  
  document.getElementById("addTaskBtn").addEventListener("click", () => {
    const title = prompt("Enter task title:");
    const dueDate = prompt("Enter due date:");
    const category = prompt("Enter category:");
    const status = "todo";
  
    if (title && dueDate && category) {
      fetch("add_task.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ title, due_date: dueDate, category, status }),
      })
        .then((response) => response.json())
        .then((data) => {
          if (data.success) {
            location.reload(); // Reload page to see the new task
          } else {
            alert("Failed to add task: " + data.error);
          }
        });
    }
  });
  

  //FOR UPDATING TASK COLUMN

  const columns = document.querySelectorAll('.task-list-container');

columns.forEach(column => {
    new Sortable(column, {
        group: 'kanban',  // Allow dragging between columns
        onEnd: function(evt) {
            const taskId = evt.item.dataset.taskId;  // Assuming each task has a unique data-task-id
            const newStatus = evt.from.id;  // Get the ID of the column (Todo, In Progress, etc.)
            
            // Update task status in the database using AJAX
            updateTaskStatus(taskId, newStatus);
        }
    });
});

function updateTaskStatus(taskId, newStatus) {
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "update_task_status.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            console.log('Task status updated successfully');
        }
    };
    xhr.send("task_id=" + taskId + "&new_status=" + newStatus);
}
