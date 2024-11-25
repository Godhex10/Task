document.getElementById('task-form').addEventListener('submit', function(event) {
    event.preventDefault();

    // Gather task data from form inputs
    const taskName = document.getElementById('task-name').value;
    const taskDescription = document.getElementById('task-description').value;
    const taskStatus = document.getElementById('task-status').value;

    // Prepare the task data
    const taskData = {
        task_name: taskName,
        description: taskDescription,
        status: taskStatus
    };

    // Send the data to the backend using fetch
    fetch('add_task.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(taskData)
    })
    .then(response => response.json())
    .then(data => {
        if (data.error) {
            alert('Error adding task: ' + data.message);
        } else {
            alert('Task added successfully!');
            // Optionally refresh the task list or update the UI
            location.reload();  // This refreshes the page
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('An error occurred while adding the task');
    });
});






function addTask(taskName, description, status) {
    // Prepare the task data
    const taskData = {
        task_name: taskName,
        description: description,
        status: status
    };

    // Send the task data to the backend
    fetch('add_task.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify(taskData),
    })
    .then(response => response.json())
    .then(data => {
        if (data.error) {
            console.error('Error:', data.message);
        } else {
            console.log('Task added successfully');
            // Now dynamically add the task to the frontend
            addTaskToUI(data.task);
        }
    })
    .catch(error => {
        console.error('Error:', error);
    });
}

function addTaskToUI(task) {
    // Create a new task HTML element
    const taskElement = `
        <div class="task" data-task-id="${task.id}">
            <h5>${task.task_name}</h5>
            <p>${task.description}</p>
            <span>Status: ${task.status}</span>
        </div>
    `;

    // Append the task to the correct section
    const statusContainer = document.querySelector(`[data-item="item-${task.status.toLowerCase()}"] .connect-sorting-content`);
    statusContainer.insertAdjacentHTML('beforeend', taskElement);
}


// Get the button and modal elements
const openFormButton = document.getElementById('open-form-btn');
const taskModal = document.getElementById('task-modal');

// Open the modal when the button is clicked
openFormButton.addEventListener('click', () => {
  taskModal.classList.add('show'); // Show the modal
  taskModal.style.display = 'block'; // Make it visible
  taskModal.style.top = '100px'; // give it top margin 100px
  document.body.style.overflow = 'hidden'; // Prevent background scroll
});

// Close the modal when the close button (x) is clicked
document.querySelector('.btn-close').addEventListener('click', () => {
  taskModal.classList.remove('show'); // Hide the modal
  taskModal.style.display = 'none'; // Hide the modal completely
  document.body.style.overflow = 'auto'; // Allow background scroll
});
