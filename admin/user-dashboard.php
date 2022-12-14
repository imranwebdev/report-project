<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include "headerScript.php" ?>
</head>
<style>
    .custom-btn {
        width: 100%;
        margin: 0;
        padding: 0;
        border: none;
        background: #F8F9FA;
        outline: none;
        text-align: left;
        padding: 8px 8px 8px 15px;


    }

    .custom-btn:hover {
        color: #3492ef;
    }
</style>

<body>
    <?php include "dashboard-nav.php" ?>
    <main>
        <div class="container-fluid ">
            <div class="row  mx-3 my-3">
                <div class="col-md-12">
                    <h4>Dashboard</h4>
                </div>
            </div>
            <div class="row mx-3 my-3">
                <div class="col-md-3 mb-3 ">
                    <div class="card inline-inspection-bg text-dark h-100">
                        <div
                            class="card-body  d-flex align-items-cente justify-content-between py-5 text-uppercase w-100 h-100 text-dark  ">
                            <span class="h5 mt-2 mt-lg-0">do inline inspection</span>
                            <img src="../images/clothing.png" class="fluid rounded " style="width:50px ;height:50px;" alt=""
                                srcset="">
                        </div>
                        <div class=" d-flex bg-light ">
                            <!-- <button type="button" class="btn bg-light text-left w-100">Get Started</button> -->
                            <button class="border-top custom-btn">Get Started<i class="bi bi-chevron-right"
                                    style="float:right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3 ">
                    <div class="card inline-inspection-bg text-dark h-100">
                        <div
                            class="card-body  d-flex align-items-cente justify-content-between py-5 text-uppercase w-100 h-100 text-dark  ">
                            <span class="h5 mt-2 mt-lg-0">do inline inspection</span>
                            <img src="../images/apparel.png" class="fluid rounded " style="width:50px ;height:50px;" alt=""
                                srcset="">
                        </div>
                        <div class=" d-flex bg-light ">
                            <!-- <button type="button" class="btn bg-light text-left w-100">Get Started</button> -->
                            <button class="border-top custom-btn">Get Started<i class="bi bi-chevron-right"
                                    style="float:right"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3 ">
                    <div class="card inline-inspection-bg text-dark h-100">
                        <div
                            class="card-body  d-flex align-items-cente justify-content-between py-5 text-uppercase w-100 h-100 text-dark  ">
                            <span class="h5 mt-2 mt-lg-0">do inline inspection</span>
                            <img src="../images/check.png" class="fluid rounded " style="width:50px ;height:50px;" alt=""
                                srcset="">
                        </div>
                        <div class=" d-flex bg-light ">
                            <!-- <button type="button" class="btn bg-light text-left w-100">Get Started</button> -->
                            <button class="border-top custom-btn">Get Started<i class="bi bi-chevron-right"
                                    style="float:right"></i></button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- ---------------------------------- -->
        <div class="row  mx-3 my-3 ">
      <div class="col-md-10  ">
        <div class="card">
          <div class="card-header">
            <span><i class="bi bi-card-text"></i> <strong>my report</strong> 
          </div>
          <div class="card-body ">
            <div class="table-responsive ">
              <table id="example" class="table table-striped " style="width:100%">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Tiger Nixon</td>
                    <td>System Architect</td>
                    <td>Edinburgh</td>
                    <td>61</td>
                    <td>2011-04-25</td>
                    <td>$320,800</td>
                  </tr>
                  <tr>
                    <td>Garrett Winters</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>63</td>
                    <td>2011-07-25</td>
                    <td>$170,750</td>
                  </tr>
                  <tr>
                    <td>Ashton Cox</td>
                    <td>Junior Technical Author</td>
                    <td>San Francisco</td>
                    <td>66</td>
                    <td>2009-01-12</td>
                    <td>$86,000</td>
                  </tr>
                  <tr>
                    <td>Cedric Kelly</td>
                    <td>Senior Javascript Developer</td>
                    <td>Edinburgh</td>
                    <td>22</td>
                    <td>2012-03-29</td>
                    <td>$433,060</td>
                  </tr>
                  <tr>
                    <td>Airi Satou</td>
                    <td>Accountant</td>
                    <td>Tokyo</td>
                    <td>33</td>
                    <td>2008-11-28</td>
                    <td>$162,700</td>
                  </tr>
                  <tr>
                    <td>Brielle Williamson</td>
                    <td>Integration Specialist</td>
                    <td>New York</td>
                    <td>61</td>
                    <td>2012-12-02</td>
                    <td>$372,000</td>
                  </tr>
                  <tr>
                    <td>Herrod Chandler</td>
                    <td>Sales Assistant</td>
                    <td>San Francisco</td>
                    <td>59</td>
                    <td>2012-08-06</td>
                    <td>$137,500</td>
                  </tr>
                  <tr>
                    <td>Rhona Davidson</td>
                    <td>Integration Specialist</td>
                    <td>Tokyo</td>
                    <td>55</td>
                    <td>2010-10-14</td>
                    <td>$327,900</td>
                  </tr>
                  <tr>
                    <td>Colleen Hurst</td>
                    <td>Javascript Developer</td>
                    <td>San Francisco</td>
                    <td>39</td>
                    <td>2009-09-15</td>
                    <td>$205,500</td>
                  </tr>
                  <tr>
                    <td>Sonya Frost</td>
                    <td>Software Engineer</td>
                    <td>Edinburgh</td>
                    <td>23</td>
                    <td>2008-12-13</td>
                    <td>$103,600</td>
                  </tr>

                </tbody>
                <tfoot>
                  <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                  </tr>
                </tfoot>
              </table>
            </div>
          </div>
        </div>
      </div>
    </main>
      <!-- ----------------------------------------------------------------------- -->
  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
  <!-- -------------------------------------------------------------------------------- -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script>
    $(document).ready(function () {
      $('#example').DataTable();
    });
  </script>
</body>

</html>