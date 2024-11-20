<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
  <title>Executive Business Brokers</title>
  <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;700&display=swap" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

  <!-- jQuery and Bootstrap JS -->
  <style>
    .accordion-button.collapsed {
      background: white;
      color: #000;
      /* Optional: Change the text color to black for better contrast */
    }

    .accordion-button.collapsed::after {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    }

    .accordion-button.collapsed::before {
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16' fill='%23fff'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
    }
  </style>

</head>

<body>
  <!-- Sidebar -->
  <div id="sidebar" class=" text-white">
    <div class="position-relative img-bg ">
      <div class="p-3">
        <img class="sidebar-logo" src="images/SidebarLogo.png" alt="">
        <button class="close-btn" aria-label="Close">&times;</button>
      </div>

    </div>
    <div class="scrollable-div">
      <ul class="nav custom-fontsize flex-column px-2">
        <li>Main Menu</li>
        <li class="nav-item activenavitem">
          <!-- <i class="fas fa-home"></i> -->
          <img src="images/Dashboard.png">
          <a class="nav-link text-white" href="#">Dashboard</a>
        </li>
        <li class="nav-item">
          <!--  <i class="fas fa-briefcase"></i> -->
          <img src="images/Listing.png">
          <a class="nav-link" href="#">Listings</a>
        </li>
        <li class="nav-item">
          <!-- <i class="fas fa-tasks"></i> -->
          <img src="images/Lead.png">
          <a class="nav-link" href="#">Leads</a>
        </li>
        <li class="nav-item">
          <!-- <i class="fas fa-list"></i> -->
          <img src="images/Off-Esc-Close.png">
          <a class="nav-link" href="#">Off/ Esc/ Close</a>
        </li>
        <li class="nav-item">
          <!-- <i class="fas fa-clock"></i> -->
          <img src="images/Agents.png">
          <a class="nav-link" href="#">Agents</a>
        </li>
        <li class="nav-item">
          <!-- <i class="fas fa-exchange-alt"></i> -->
          <img src="images/Buyers.png">
          <a class="nav-link" href="#">Buyers</a>
        </li>
        <li class="nav-item">
          <!-- <i class="fas fa-address-book"></i> -->
          <img src="images/Contacts.png">
          <a class="nav-link" href="#">Contacts</a>
        </li>
        <li class="nav-item">
          <!-- <i class="fas fa-calendar-alt"></i> -->
          <img src="images/Referrals.png">
          <a class="nav-link" href="#">Referrals</a>
        </li>
        <li class="nav-item">
          <!-- <i class="fas fa-calendar-alt"></i> -->
          <img src="images/Showings.png">
          <a class="nav-link" href="#">Showings</a>
        </li>
      </ul>
      <ul class="nav custom-fontsize2 flex-column" style="margin-bottom: 30px;">
        <div class="accordion-item px-2 my-2">
          <button id="reportAccordionButton" style="background-color: #93744B; padding: 11px 13px;"
            class="accordion-button text-white default text-end" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            Report
          </button>
          <div id="collapseOne" class="accordion-collapse collapse " aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <ul class="acc-list" style="list-style-type: none; padding: 0;">
                <li class="nav-item">Report Item 1</li>
                <li class="nav-item">Report Item 1</li>
                <li class="nav-item">Report Item 1</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="accordion-item px-2">
          <button id="reportAccordionButton" style="background-color: #93744B; padding: 11px 13px;"
            class="accordion-button default text-end" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsetwo" aria-expanded="true" aria-controls="collapseOne">
            Report
          </button>
          <div id="collapsetwo" class="accordion-collapse collapse " aria-labelledby="headingOne"
            data-bs-parent="#accordionExample">
            <div class="accordion-body">
              <ul class="acc-list" style="list-style-type: none; padding: 0;">
                <li class="nav-item">Report Item 1</li>
                <li class="nav-item">Report Item 1</li>
                <li class="nav-item">Report Item 1</li>
              </ul>
            </div>
          </div>
        </div>
      </ul>
    </div>
  </div>

  <!-- Content -->
  <div id="content">
    <nav class="navbar navbar-expand-lg navbar-light navstickey ">
      <div class="container-fluid">
        <div class="d-flex justify-content-between w-100">
          <div class="d-flex align-items-center">
            <button id="sidebarToggle" class="btn">☰</button>
            <ol class="breadcrumb breadcrumb-list m-0 ms-2">
              <li class="breadcrumb-item"><a href="">Home</a></li>
              <li class="breadcrumb-item"><a href="">Dashboard</a></li>
            </ol>
          </div>
          <div class="header-right profile-dropdown d-flex align-items-center">
            <div class="dropdown">
              <button class="btn dropdown-toggle contact-available profile" type="button" id="dropdownMenuButton"
                data-bs-toggle="dropdown" aria-expanded="false">
                <img src="images/user.png" alt="User Profile" class="rounded-circle" width="35" height="35">
              </button>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton">
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <i class="fas fa-user me-2 icon-font"></i>
                    Profile
                  </a>
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <i class="fas fa-question-circle me-2 icon-font"></i>
                    Help
                  </a>
                </li>
                <li>
                  <a class="dropdown-item d-flex align-items-center" href="#">
                    <i class="fas fa-sign-out-alt me-2 icon-font"></i>
                    Logout
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </nav>
    <div class="container-fluid content bg-light">
      <h1>Electronic Broker Information System</h1>
      <p class="sub-heading">Administration Dashboard</p>
      <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3 ">
          <div class="card view-data">
            <div>
              <h3>Active Listings</h3>
              <span>781</span>
            </div>
            <div><img src="images/Active-Listings.svg"></div>
          </div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
          <div class="card view-data">
            <div>
              <h3>Total Agents</h3>
              <span>27</span>
            </div>
            <div><img src="images/Total-Agents.svg"></div>
          </div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
          <div class="card view-data">
            <div>
              <h3>Total Buyers</h3>
              <span>37234</span>
            </div>
            <div><img src="images/Total-Buyers.svg"></div>
          </div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
          <div class="card view-data">
            <div>
              <h3>Showings</h3>
              <span>1499</span>
            </div>
            <div><img src="images/Showings.svg"></div>
          </div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
          <div class="card view-data">
            <div>
              <h3>Offers</h3>
              <span>125</span>
            </div>
            <div><img src="images/Offers.svg"></div>
          </div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
          <div class="card view-data">
            <div>
              <h3>Total Leads</h3>
              <span>53</span>
            </div>
            <div><img src="images/Total-Leads.svg"></div>
          </div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
          <div class="card view-data">
            <div>
              <h3>Closings</h3>
              <span>41</span>
            </div>
            <div><img src="images/Closings.svg"></div>
          </div>
        </div>

        <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
          <div class="card view-data">
            <div>
              <h3>Assigned</h3>
              <span>1784</span>
            </div>
            <div><img src="images/Assigned.svg"></div>
          </div>
        </div>

      </div>
      <div class="row mt-1">
        <div class="col-md-6">
          <div class="card" style="height: 360px;">
            <div class="card-body">
              <p class="text-start text-5A102A">Overview</p>
              <canvas id="myChart"></canvas>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card" style="height: 360px;">
            <div class="card-body text-center">
              <p class="text-start text-5A102A">Active Listings</p>
              <h3 class="text-start text-5E5E5E">781</h3>
              <div class="d-flex justify-content-center align-items-center">
                <div class="legend-container">
                  <ul style="list-style-type: none; ">
                    <li><span style="color:#4C1A2A;">&#9679;</span> 75%</li>
                    <li><span style="color:#9D6B77;">&#9679;</span> 20%</li>
                    <li><span style="color:#D3B0B7;">&#9679;</span> 5%</li>
                  </ul>
                </div>
                <div class="chart-container" style="width: 100%; max-width: 300px;">
                  <canvas id="myDonutChart"></canvas>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="footer">
      <div class="container-fluid bg-light"></div>
      <p class="text-center p-2">Copyrights 2024 Executive Business Brokers. All Rights Reserved.</p>
    </div>
  </div>


  <!-- Bootstrap JS and Popper.js -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <!-- Custom JS -->
  <script>
    document.getElementById('sidebarToggle').addEventListener('click', function () {
      document.getElementById('sidebar').classList.toggle('collapsed');
      document.getElementById('content').classList.toggle('collapsed');
    });

    document.addEventListener('DOMContentLoaded', function () {
      document.querySelector('.close-btn').addEventListener('click', function () {
        document.getElementById('sidebar').classList.toggle('collapsed');
        document.getElementById('content').classList.toggle('collapsed');
      });
    });

    const ctx1 = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx1, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
          label: 'Dataset 1',
          data: [200, 300, 500, 700, 600, 900, 800, 1200, 1100, 1300, 1000, 1400],
          borderColor: '#965a3e',
          fill: false,
          tension: 0.4,
        }, {
          label: 'Dataset 2',
          data: [150, 250, 400, 600, 550, 850, 750, 1100, 1000, 1250, 900, 1300],
          borderColor: '#cccccc',
          fill: false,
          tension: 0.4,
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { display: false }
        },
        scales: { y: { beginAtZero: true, ticks: { stepSize: 200 } } }
      }
    });

    const ctx2 = document.getElementById('myDonutChart').getContext('2d');
    const myDonutChart = new Chart(ctx2, {
      type: 'doughnut',
      data: {
        labels: ['75%', '20%', '5%'],
        datasets: [{
          data: [75, 20, 5],
          backgroundColor: ['#4b0a26', '#b0848c', '#e3c8cb'],
        }]
      },
      options: {
        cutout: '70%',
        responsive: true,
        maintainAspectRatio: false, // Makes the chart responsive to size changes
        plugins: {
          legend: { display: false }
        }
      }
    });

  </script>
</body>

</html>