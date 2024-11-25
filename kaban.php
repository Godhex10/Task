<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kanban Board</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <style>
    .task-list-container {
      margin: 15px;
      background: #f1f1f1;
      padding: 10px;
      border-radius: 5px;
      height: 80vh;
      overflow-y: auto;
    }
    .card {
      margin: 10px 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="row">
      <!-- Todo Column -->
      <div class="col-md-3">
        <div class="task-list-container" id="todo">
          <h5>Todo</h5>
          <div id="todo-tasks"></div>
        </div>
      </div>
      
      <!-- In Progress Column -->
      <div class="col-md-3">
        <div class="task-list-container" id="inprogress">
          <h5>In Progress</h5>
          <div id="inprogress-tasks"></div>
        </div>
      </div>
      
      <!-- Pending Column -->
      <div class="col-md-3">
        <div class="task-list-container" id="pending">
          <h5>Pending</h5>
          <div id="pending-tasks"></div>
        </div>
      </div>
      
      <!-- Done Column -->
      <div class="col-md-3">
        <div class="task-list-container" id="done">
          <h5>Done</h5>
          <div id="done-tasks"></div>
        </div>
      </div>
    </div>

    <div class="container mt-3">
  <h4>Create New Task</h4>
  <form id="new-task-form">
    <div class="mb-3">
      <label for="task-title" class="form-label">Task Title</label>
      <input type="text" class="form-control" id="task-title" required>
    </div>
    <div class="mb-3">
      <label for="task-description" class="form-label">Description</label>
      <textarea class="form-control" id="task-description" required></textarea>
    </div>
    <div class="mb-3">
      <label for="task-status" class="form-label">Status</label>
      <select class="form-select" id="task-status" required>
        <option value="Todo">Todo</option>
        <option value="In Progress">In Progress</option>
        <option value="Pending">Pending</option>
        <option value="Done">Done</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Add Task</button>
  </form>
</div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

  <script>
    $(document).ready(function() {
      // Fetch tasks and populate the board
      function fetchTasks() {
        $.ajax({
          url: 'fetch_tasks.php',
          method: 'GET',
          dataType: 'json',
          success: function(data) {
            // Clear the current tasks
            $('#todo-tasks').empty();
            $('#inprogress-tasks').empty();
            $('#pending-tasks').empty();
            $('#done-tasks').empty();
            
            // Add tasks to their respective columns
            data.forEach(task => {
              const taskHtml = `<div class="card" data-id="${task.id}">
                                  <div class="card-body">
                                    <h6>${task.title}</h6>
                                    <p>${task.description}</p>
                                    <small>${task.date}</small>
                                  </div>
                                </div>`;

              if (task.status === 'Todo') {
                $('#todo-tasks').append(taskHtml);
              } else if (task.status === 'In Progress') {
                $('#inprogress-tasks').append(taskHtml);
              } else if (task.status === 'Pending') {
                $('#pending-tasks').append(taskHtml);
              } else if (task.status === 'Done') {
                $('#done-tasks').append(taskHtml);
              }
            });
          }
        });
      }

      fetchTasks(); // Initial fetch when the page loads

      // Enable dragging and dropping
      $('.task-list-container').sortable({
        connectWith: '.task-list-container',
        stop: function(event, ui) {
          const taskId = ui.item.data('id');
          const newStatus = ui.item.closest('.task-list-container').attr('id');
          // Update task status in the database
          $.ajax({
            url: 'update_task_status.php',
            method: 'POST',
            data: { taskId: taskId, newStatus: newStatus },
            success: function(response) {
              console.log('Task status updated:', response);
            }
          });
        }
      }).disableSelection();
    });
  </script>
  <script>
    $(document).ready(function() {
  $('#new-task-form').on('submit', function(e) {
    e.preventDefault();

    const title = $('#task-title').val();
    const description = $('#task-description').val();
    const status = $('#task-status').val();

    $.ajax({
      url: 'add_task.php',
      method: 'POST',
      data: {
        title: title,
        description: description,
        status: status
      },
      success: function(response) {
        alert('Task added successfully!');
        fetchTasks(); // Reload the tasks after adding a new one
      },
      error: function(xhr, status, error) {
        alert('Error adding task: ' + error);
      }
    });
  });
});

  </script>
</body>
</html>
