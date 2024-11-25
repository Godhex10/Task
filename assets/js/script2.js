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
                                  <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                                  <a class="dropdown-item" href="javascript:void(0);">Delete</a>
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
loadTasks();




