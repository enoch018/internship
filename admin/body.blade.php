<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<div class="main-panel">
  <div class="content-wrapper">
    <div class="row">

      <!-- Potential growth -->
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3  style="font-size:20px" class="mb-0">{{$total_products}}</h3>
                  {{-- <p class="text-success ml-2 mb-0 font-weight-medium">+3.5%</p> --}}
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal text-center">Total Products</h6>
          </div>
        </div>
      </div>

      <!-- Revenue current -->
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">{{$total_orders}}</h3>
                  
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal text-center">Total Orders</h6>
          </div>
        </div>
      </div>

      <!-- Daily Income -->
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">{{$total_customers}}</h3>
                
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-danger">
                  <span class="mdi mdi-arrow-bottom-left icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal text-center">Total Customers</h6>
          </div>
        </div>
      </div>

      <!-- Expense current -->
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">{{$total_delivered}}</h3>
                 
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal text-center">Order Delivered</h6>
          </div>
        </div>
      </div>

      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">{{$total_processing}}</h3>
           
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal text-center">Order Processing</h6>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-sm-6 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <div class="row">
              <div class="col-9">
                <div class="d-flex align-items-center align-self-start">
                  <h3 class="mb-0">Rs.{{$total_revenue}}</h3>
                  
                </div>
              </div>
              <div class="col-3">
                <div class="icon icon-box-success">
                  <span class="mdi mdi-arrow-top-right icon-item"></span>
                </div>
              </div>
            </div>
            <h6 class="text-muted font-weight-normal text-center">Total Revenue</h6>
          </div>
        </div>
      </div>

    </div>
    <body>
      <div>
          <h2>Sales Trends</h2>
          <!-- Canvas element to render the chart -->
          <canvas id="salesChart" width="800" height="400"></canvas>
      </div>

      <script>
        // Sample data for sales trends
        const salesData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June'],
            datasets: [{
                label: 'Sales',
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1,
                data: [100, 150, 200, 250, 300, 350] // Sample sales data for each month
            }]
        };

        // Create the chart
        const ctx = document.getElementById('salesChart').getContext('2d');
        const salesChart = new Chart(ctx, {
            type: 'line',
            data: salesData
        });
    </script>

    <!-- partial -->
  </div>
  <!-- main-panel ends -->

</div>
