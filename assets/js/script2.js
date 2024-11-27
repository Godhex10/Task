// Fetch and render tasks on page load
async function loadTasks() {
    try {
        const response = await fetch('fetch_tasks.php');
        const data = await response.json();

        if (!data.error) {
            const taskContainers = {
                'Todo': document.querySelector('[data-item="item-todo"] .connect-sorting-content'),
                'In Progress': document.querySelector('[data-item="item-inprogress"] .connect-sorting-content'),
                'Pending': document.querySelector('[data-item="item-pending"] .connect-sorting-content'),
                'Done': document.querySelector('[data-item="item-done"] .connect-sorting-content'),
            };

            // Clear existing tasks
            Object.values(taskContainers).forEach(container => container.innerHTML = '');

            // Populate tasks into respective columns
            data.tasks.forEach(task => {
                const taskCard = document.createElement('div');
                taskCard.className = 'card img-task';
                taskCard.id = task.id;
                taskCard.setAttribute('draggable', 'true');
                taskCard.innerHTML = `
                  <div class="card-body">
                      <div class="task-header">
                          <div>
                              <h4 data-item-title="${task.task_name}">${task.task_name}</h4>
                          </div>
                          <div class="dropdown">
                              <a class="dropdown-toggle" href="javascript:void(0)" role="button" data-bs-toggle="dropdown">
                                  <i class="fa-solid fa-ellipsis" style="color: #fff;"></i>
                              </a>
                              <div class="dropdown-menu dropdown-menu-end">
                                   <button class="edit-btn btn" onclick="openEditTaskModal(${task.id})">Edit</button>
                                   <button class="delete-btn btn" onclick="deleteTask(${task.id})">Delete</button>
                              </div>
                          </div>
                      </div>
                      <div class="task-content">
                          <p class="mb-0">${task.description}</p>
                      </div>
                      <div class="task-body">
                          <div class="task-bottom">
                              <div class="tb-section-1">
                                  <span class="hstack gap-2 fs-2">${task.created_at}</span>
                              </div>
                              <div class="tb-section-2">
                                  <span class="badge text-bg-warning fs-1">${task.status}</span>
                              </div>
                          </div>
                      </div>
                  </div>`;
                taskContainers[task.status].appendChild(taskCard);
            });

            console.log('Tasks loaded successfully');
        } else {
            console.error('Error fetching tasks:', data.message);
        }
    } catch (error) {
        console.error('Error loading tasks:', error);
    }
}

// Call the function on page load
document.addEventListener("DOMContentLoaded", function() {
    loadTasks();
});


















// Function to open the modal
function openEditTaskModal(taskId) {
    // Example: You can fetch the task data based on the ID
    console.log("Editing task with ID:", taskId);
    
    // Simulate fetching task data for this example
    const taskData = { 
        task_name: 'New Task name', 
        description: 'New Description' 
    };

    // Fill the form with task data
    document.getElementById('taskName').value = taskData.task_name;
    document.getElementById('taskDescription').value = taskData.description;

    // Show the modal
    const modal = document.getElementById('editTaskModal');
    modal.classList.add('show');
    modal.style.display = 'flex';
}

// Close the modal when clicking the close button or the overlay
document.querySelector('.modal .close').addEventListener('click', closeModal);
document.querySelector('.modal').addEventListener('click', (e) => {
    // Close the modal if the overlay (background) is clicked
    if (e.target === e.currentTarget) {
        closeModal();
    }
});

function closeModal() {
    const modal = document.getElementById('editTaskModal');
    modal.classList.remove('show');
    modal.style.display = 'none';
}

















// Function to submit the edited task to the backend
async function submitEditTaskForm() {
    const taskId = document.getElementById('taskId').value;  // Hidden input with task ID
    const taskName = document.getElementById('taskName').value;
    const taskDescription = document.getElementById('taskDescription').value;

    // Create a FormData object to send the data
    const formData = new FormData();
    formData.append('taskId', taskId);
    formData.append('taskName', taskName);
    formData.append('taskDescription', taskDescription);

    try {
        // Send the data using fetch API
        const response = await fetch('update_task.php', {
            method: 'POST',
            body: formData
        });
        const data = await response.json();

        if (data.success) {
            alert(data.message);  // Show success message
            closeModal();  // Close the modal
            loadTasks();  // Reload tasks after updating
        } else {
            alert(data.message);  // Show error message
        }
    } catch (error) {
        console.error('Error updating task:', error);
        alert('An error occurred while updating the task.');
    }
}

// Modify the modal open function to populate hidden task ID
function openEditTaskModal(taskId) {
    // Fetch the task data based on the ID (this can be done via AJAX if needed)
    console.log("Editing task with ID:", taskId);

    // Example: You can fetch task data for this example
    const taskData = { 
        task_name: '', 
        description: '' 
    };

    // Fill the form with task data
    document.getElementById('taskName').value = taskData.task_name;
    document.getElementById('taskDescription').value = taskData.description;
    document.getElementById('taskId').value = taskId;  // Set the task ID in hidden input

    // Show the modal
    const modal = document.getElementById('editTaskModal');
    modal.classList.add('show');
    modal.style.display = 'flex';
}

// Add event listener to form submission
document.getElementById('editTaskForm').addEventListener('submit', function(e) {
    e.preventDefault();
    submitEditTaskForm();
});

// Function to close the modal
function closeModal() {
    const modal = document.getElementById('editTaskModal');
    modal.style.display = 'none';
    modal.classList.remove('show');
}





//FUCNTION TO DELETE TASK FROM BOARD
async function deleteTask(taskId) {
    if (confirm("Are you sure you want to delete this task?")) {
        try {
            const response = await fetch(`delete_task.php?id=${taskId}`, {
                method: "DELETE",
            });
            const data = await response.json();

            if (data.success) {
                // Remove the task from the UI
                document.getElementById(taskId).remove();
                alert("Task deleted successfully.");
            } else {
                alert(data.message || "Failed to delete task.");
            }
        } catch (error) {
            console.error("Error deleting task:", error);
            alert("An error occurred while deleting the task.");
        }
    }
}


//FOR UPDATING TASK STATUS AFTER DROPPING
const columns = document.querySelectorAll(".connect-sorting-content");

columns.forEach(column => {
    column.addEventListener("drop", async (event) => {
        event.preventDefault();
        const taskId = event.dataTransfer.getData("text/plain");
        const newStatus = column.getAttribute("data-item");

        try {
            // Update the task's status in the database
            const response = await fetch('update_status.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({ id: taskId, status: newStatus }),
            });

            const result = await response.json();

            if (result.success) {
                // Move the task to the new column
                const taskElement = document.getElementById(taskId);
                column.appendChild(taskElement);
                alert("Task updated successfully!");
            } else {
                alert(result.message || "Failed to update task.");
            }
        } catch (error) {
            console.error("Error updating task status:", error);
            alert("An error occurred while updating the task.");
        }
    });

    column.addEventListener("dragover", (event) => {
        event.preventDefault();
    });
});






//FUNCTION TO OPEN TRANSACTION MODAL FROM FINANCE PAGE
// JavaScript for modal functionality
const openModalBtn = document.getElementById('openTransactionForm');
const modal = document.getElementById('transactionModal');
const closeModalBtn = document.getElementById('closeTransactionModal');

// Open the modal
openModalBtn.addEventListener('click', () => {
    modal.style.display = 'block';
});

// Close the modal
closeModalBtn.addEventListener('click', () => {
    modal.style.display = 'none';
});

// Close the modal if user clicks outside the modal dialog
window.addEventListener('click', (event) => {
    if (event.target === modal) {
        modal.style.display = 'none';
    }
});

