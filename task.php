<?php
// Include the database connection file
require 'includes/db.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr" data-bs-theme="dark" data-color-theme="Blue_Theme" data-layout="vertical">


<!-- Mirrored from bootstrapdemos.adminmart.com/modernize/dist/dark/app-kanban.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Oct 2024 21:13:16 GMT -->

<head>
  <!-- Required meta tags -->
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <!-- Favicon icon-->
  <link rel="shortcut icon" type="image/png" type="image/png" href="./assets/img/dash.png" />

  <!-- Core Css -->
  <link rel="stylesheet" href="./assets/css/styles.css" />
  <link rel="stylesheet" href="./assets/css/custom-style.css" />

  <title>Prince | Task</title>
</head>

<body class="link-sidebar">
  <!-- Preloader Section -->
  <!-- <div id="preloader">
    <div class='omnitrix'>
      <p class='effect'></p>
      <button class='ominip'><img class='pressione' src='./assets/img/ben.png'></button>
      <button class='ominib' id='btn'></button>
      <audio src='click.wav'>
    </div>
  </div> -->
  <div id="main-wrapper">
    <!-- Sidebar Start -->
    <?php include './includes/sidebar.php' ?>
    <!--  Sidebar End -->
    <div class="page-wrapper">
      <!--  Header Start -->
      <?php include './includes/header.php'; ?>
      <!--  Header End -->

      <?php include './includes/left-side-bar.php'; ?>

      <div class="body-wrapper">
        <div class="container-fluid">
          <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
            <div class="card-body px-4 py-3">
              <div class="row align-items-center">
                <div class="col-9">
                  <h4 class="fw-semibold mb-8 text">Task</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none text-white" href="../index.php">Home</a>
                      </li>
                      <li class="breadcrumb-item text-white" aria-current="page">Task</li>
                    </ol>
                  </nav>
                </div>
                <div class="col-3">
                  <div class="text-center mb-n5">
                    <img src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/images/breadcrumb/ChatBc.png" alt="modernize-img" class="img-fluid mb-n4" />
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="action-btn layout-top-spacing mb-7 d-flex align-items-center justify-content-between flex-wrap gap-6">
            <h5 class="mb-0 fs-5">Your Current Task</h5>
            <!-- Button to open the Add Task form -->
            <button id="open-form-btn" class="btn btn-primary">Add New Task</button>
          </div>

          <!-- Modal for adding a task -->
          <div id="task-modal" class="modal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Add Task</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <form id="task-form">
                    <div class="mb-3">
                      <label for="task-name" class="form-label">Task Name</label>
                      <input type="text" class="form-control" id="task-name" placeholder="Enter task name">
                    </div>
                    <div class="mb-3">
                      <label for="task-description" class="form-label">Task Description</label>
                      <textarea class="form-control" id="task-description" rows="3" placeholder="Enter task description"></textarea>
                    </div>
                    <div class="mb-3">
                      <label for="task-status" class="form-label">Task Status</label>
                      <select class="form-select" id="task-status">
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
            </div>
          </div>

          <div class="modal fade" id="addItemModal" tabindex="-1" role="dialog" aria-labelledby="addTaskModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="add-task-title modal-title" id="addTaskModalTitleLabel1">Add Task</h5>
                  <h5 class="edit-task-title modal-title" id="addTaskModalTitleLabel2">Edit Task</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                  </button>
                </div>
                <div class="modal-body">
                  <div class="compose-box">
                    <div class="compose-content" id="addTaskModalTitle">
                      <div class="addTaskAccordion" id="add_task_accordion">
                        <div class="task-content task-text-progress">
                          <div id="collapseTwo" class="collapse show" data-parent="#add_task_accordion">
                            <div class="task-content-body">
                              <form id="taskForm" action="javascript:void(0);">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="task-title mb-4 d-flex">
                                      <input id="kanban-title" type="text" placeholder="Task" class="form-control" name="task_name" required>
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="task-badge d-flex">
                                      <textarea id="kanban-text" placeholder="Task Text" class="form-control" name="description" required></textarea>
                                    </div>
                                  </div>
                                </div>
                                <button type="submit" id="submitTask" class="btn btn-primary mt-3">Add Task</button>
                              </form>

                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer justify-content-start">
                  <div class="d-flex gap-6">
                    <button data-btn-action="addTask" type="submit" id="submitTask" class="btn add-tsk btn-primary mt-3">Add Task</button>
                    <button data-btn-action="editTask" class="btn edit-tsk btn-success">Save</button>
                    <button class="btn bg-danger-subtle text-danger d-flex align-items-center gap-1" data-bs-dismiss="modal">Cancel</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="addListModal" tabindex="-1" role="dialog" aria-labelledby="addListModalTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title add-list-title" id="addListModalTitleLabel1">Add List</h5>
                  <h5 class="modal-title edit-list-title" id="addListModalTitleLabel2">Edit List</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <div class="compose-box">
                    <div class="compose-content" id="addListModalTitle">
                      <form action="javascript:void(0);">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="list-title d-flex align-items-center">
                              <input id="item-name" type="text" placeholder="List Name" class="form-control" name="task">
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="modal-footer justify-content-start">
                  <div class="d-flex gap-6">
                    <button class="btn bg-danger-subtle text-danger d-flex align-items-center gap-1" data-bs-dismiss="modal">Cancel</button>
                    <button class="btn add-list btn-primary">Add List</button>
                    <button class="btn edit-list btn-success">Save</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal fade" id="deleteConformation" tabindex="-1" role="dialog" aria-labelledby="deleteConformationLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content" id="deleteConformationLabel">
                <div class="modal-header">
                  <div class="icon round-40 d-flex align-items-center justify-content-center bg-light-danger text-danger me-2 rounded-circle">
                    <i class="ti ti-trash fs-6"></i>
                  </div>
                  <h5 class="modal-title fw-semibold" id="exampleModalLabel">Delete the task?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                  </button>
                </div>
                <div class="modal-body">
                  <p class="mb-0">If you delete the task it will be gone forever. Are you sure you want to
                    proceed?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn bg-danger-subtle text-danger" data-bs-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-danger" data-remove="task">Delete</button>
                </div>
              </div>
            </div>
          </div>
          <div class="scrumboard" id="cancel-row">
            <div class="layout-spacing pb-3">
              <div data-simplebar>
                <div class="task-list-section">
                  <div data-item="item-todo" class="task-list-container" data-action="sorting">
                    <div class="connect-sorting connect-sorting-todo">
                      <div class="task-container-header">
                        <h6 class="item-head mb-0 fs-4 fw-semibold">Todo</h6>
                      </div>
                      <div class="connect-sorting-content" data-sortable="true"></div>
                    </div>
                  </div>

                  <div data-item="item-inprogress" class="task-list-container" data-action="sorting">
                    <div class="connect-sorting connect-sorting-inprogress">
                      <div class="task-container-header">
                        <h6 class="item-head mb-0 fs-4 fw-semibold">In Progress</h6>
                      </div>
                      <div class="connect-sorting-content" data-sortable="true"></div>
                    </div>
                  </div>

                  <div data-item="item-pending" class="task-list-container" data-action="sorting">
                    <div class="connect-sorting connect-sorting-pending">
                      <div class="task-container-header">
                        <h6 class="item-head mb-0 fs-4 fw-semibold">Pending</h6>
                      </div>
                      <div class="connect-sorting-content" data-sortable="true"></div>
                    </div>
                  </div>

                  <div data-item="item-done" class="task-list-container" data-action="sorting">
                    <div class="connect-sorting connect-sorting-done">
                      <div class="task-container-header">
                        <h6 class="item-head mb-0 fs-4 fw-semibold">Done</h6>
                      </div>
                      <div class="connect-sorting-content" data-sortable="true"></div>
                    </div>
                  </div>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script>
        function handleColorTheme(e) {
          document.documentElement.setAttribute("data-color-theme", e);
        }
      </script>



    </div>
    <!-- Modal HTML Structure -->
    <div class="modal" id="editTaskModal" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-contentt">
          <div class="modal-header">
            <h5 class="modal-title text">Edit Task</h5>
            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>

          </div>
          <form id="editTaskForm">
            <div class="modal-body">
              <!-- Hidden Task ID -->
              <input type="hidden" id="taskId" name="taskId">
              <div class="form-group">
                <label for="taskName">Task Name</label>
                <input type="text" class="form-control" id="taskName" name="taskName" placeholder="New Task name" required>
              </div>
              <div class="form-group mt-3">
                <label for="taskDescription">Description</label>
                <textarea class="form-control" id="taskDescription" name="taskDescription" rows="4" placeholder="New Description" required></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Save changes</button>
            </div>
          </form>
        </div>
      </div>
    </div>




  </div>

  </div>
  <div class="dark-transparent sidebartoggler"></div>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/js/vendor.min.js"></script>
  <!-- Import Js Files -->
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/libs/simplebar/dist/simplebar.min.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/js/theme/app.dark.init.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/js/theme/theme.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/js/theme/app.min.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/js/theme/sidebarmenu.js"></script>
  <script src="./assets/js/script.js"></script>
  <script src="./assets/js/script2.js"></script>
  <script src="./assets/js/add_task.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Sortable/1.14.0/Sortable.min.js"></script>


  <!-- solar icons -->
  <script src="../../../../cdn.jsdelivr.net/npm/iconify-icon%401.0.8/dist/iconify-icon.min.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/libs/jquery-ui/dist/jquery-ui.min.js"></script>
  <script src="https://bootstrapdemos.adminmart.com/modernize/dist/assets/js/apps/kanban.js"></script>





</body>


<!-- Mirrored from bootstrapdemos.adminmart.com/modernize/dist/dark/app-kanban.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Oct 2024 21:13:17 GMT -->

</html>