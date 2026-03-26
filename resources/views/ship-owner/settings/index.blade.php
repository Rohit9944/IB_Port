
@include('ship-owner.include.header')

<div class="container-fluid page-body-wrapper">
@include('ship-owner.include.sidebar')
<div class="main-panel dashboard-page">
  <div class="content-wrapper">
    <div class="row dashboard-card-top d-flex align-items-center mb-4">
      <div class="text-start col-lg-6">
        <h1 class="mb-0 mainHeading font-weight-bolder">System Settings</h1>
        <p>Manage all customer details in one place</p>
      </div>
      <div class="col-lg-6 text-right d-flex align-items-center justify-content-end headerBtn">
        <a href="{{ route('ship.settings') }}" class="btn btn-primary px-2"><i class="mdi mdi-plus"></i> Add Vessel</a>
      </div>
    </div>


    
 <div class="row">
    <!-- Left Profile Card -->
    

    <!-- Right Settings -->
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body p-0">

          <!-- Tabs -->
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profileTab">
                Profile
              </button>
            </li>
             <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#generalsettingsTab">
                General Settings
              </button>
            </li>
            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#companyTab">
                Company / App Information
              </button>
            </li>
            
            
            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#securityTab">
                Security
              </button>
            </li>
            <li class="nav-item">
              <button class="nav-link" data-bs-toggle="tab" data-bs-target="#notificationTab">
                Notifications
              </button>
            </li>
          </ul>

          <!-- Tab Content -->
          <div class="tab-content">

            <!-- Profile Tab -->
            <div class="tab-pane fade show active" id="profileTab">
              <form>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" class="form-control" placeholder="First name" value="Lucky">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" class="form-control" placeholder="Last name" value="Jesse">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-username">Phone No</label>
                        <input type="number" id="input-phone" class="form-control" placeholder="phone No" value="+91">
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control" placeholder="jesse@example.com">
                      </div>
                    </div>
                  </div>
                  
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" class="form-control" placeholder="City" value="New York">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Country</label>
                        <input type="text" id="input-country" class="form-control" placeholder="Country" value="United States">
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Postal code</label>
                        <input type="number" id="input-postal-code" class="form-control" placeholder="Postal code">
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Description -->
                <h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group">
                    <label class="form-control-label">About Me</label>
                    <textarea rows="4" class="form-control" placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
                  </div>
                </div>
                <div class="text-end mt-4">
                  <button class="btn btn-primary">Save Changes</button>
                </div>
              </form>
            </div>


            <div class="tab-pane fade" id="companyTab">
             <form>

  

    <!-- Company / App Info -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h6 class="settings-title mb-3">Company / App Information</h6>

        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label">Company Name</label>
            <input type="text" class="form-control" value="MgMoulds">
          </div>

          <div class="col-md-6">
            <label class="form-label">Company Address</label>
            <input type="text" class="form-control" value="Noida, Uttar Pradesh">
          </div>

          <div class="col-md-4">
            <label class="form-label">Logo Upload</label>
            <input type="file" class="form-control">
          </div>

          <div class="col-md-4">
            <label class="form-label">Default Currency</label>
            <select class="form-select">
              <option selected="">INR ($)</option>
              <option>USD ($)</option>
            </select>
          </div>

          <div class="col-md-4">
            <label class="form-label">Timezone</label>
            <select class="form-select">
              <option selected="">Asia/Kolkata</option>
              <option>UTC</option>
            </select>
          </div>
        </div>

      </div>
    </div>

    <!-- Buttons -->
    <div class="text-end">
      <button type="reset" class="btn btn-outline-secondary">Cancel</button>
      <button type="submit" class="btn btn-primary">Save Settings</button>
    </div>

  </form>
            </div>

            <div class="tab-pane fade" id="generalsettingsTab">
             <form>

    <!-- General Settings -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h6 class="settings-title mb-3">General Settings</h6>

        <div class="row g-3">
          <div class="col-md-4">
            <label class="form-label">Site Name</label>
            <input type="text" class="form-control" value="MgMoulds">
          </div>

          <div class="col-md-4">
            <label class="form-label">Admin Email</label>
            <input type="email" class="form-control" value="admin@Mgmoulds.com">
          </div>

          <div class="col-md-4">
            <label class="form-label">Support Contact</label>
            <input type="text" class="form-control" value="+91 98765 43210">
          </div>
        </div>

      </div>
    </div>

    <!-- Company / App Info -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h6 class="settings-title mb-3">Company / App Information</h6>

        <div class="row g-3">
          <div class="col-md-6 form-group">
            <label class="form-label">Company Name</label>
            <input type="text" class="form-control" value="Mg Moulds Pvt Ltd">
          </div>

          <div class="col-md-6 form-group">
            <label class="form-label">Company Address</label>
            <input type="text" class="form-control" value="Noida, Uttar Pradesh">
          </div>

          <div class="col-md-4 form-group">
            <label class="form-label">Logo Upload</label>
            <input type="file" class="form-control">
          </div>

          <div class="col-md-4 form-group">
            <label class="form-label">Default Currency</label>
            <select class="form-select">
              <option selected="">INR ($)</option>
              <option>USD ($)</option>
            </select>
          </div>

          <div class="col-md-4 form-group">
            <label class="form-label">Timezone</label>
            <select class="form-select">
              <option selected="">Asia/Kolkata</option>
              <option>UTC</option>
            </select>
          </div>
        </div>

      </div>
    </div>

    <!-- Notification Settings -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h6 class="settings-title mb-3">Notification Settings</h6>

        <div class="form-check mb-2">
          <input class="form-check-input" type="checkbox" checked="">
          <label class="form-check-label">
            Email Notifications
          </label>
        </div>

        <div class="form-check mb-2">
          <input class="form-check-input" type="checkbox" checked="">
          <label class="form-check-label">
            SMS Notifications
          </label>
        </div>

        <div class="form-check">
          <input class="form-check-input" type="checkbox">
          <label class="form-check-label">
            Push Notifications
          </label>
        </div>

      </div>
    </div>

    <!-- Payment Settings -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h6 class="settings-title mb-3">Payment Settings</h6>

        <div class="row g-3">
          <div class="col-md-4 form-group">
            <label class="form-label">Payment Gateway</label>
            <select class="form-select">
              <option selected="">Razorpay</option>
              <option>Stripe</option>
            </select>
          </div>

          <div class="col-md-4 form-group">
            <label class="form-label">Tax Percentage (%)</label>
            <input type="number" class="form-control" value="18">
          </div>

          <div class="col-md-4 form-group">
            <label class="form-label">Invoice Prefix</label>
            <input type="text" class="form-control" value="Mg-INV">
          </div>
        </div>

      </div>
    </div>

    <!-- Security Settings -->
    <div class="card shadow-sm mb-4">
      <div class="card-body">
        <h6 class="settings-title mb-3">Security Settings</h6>

        <div class="row g-3">
          <div class="col-md-4 form-group">
            <label class="form-label">Admin Password</label>
            <input type="password" class="form-control" placeholder="********">
          </div>

          <div class="col-md-4 form-group">
            <label class="form-label">Confirm Password</label>
            <input type="password" class="form-control" placeholder="********">
          </div>

          <div class="col-md-4 form-group">
            <label class="form-label">Two-Factor Authentication</label>
            <select class="form-select">
              <option>Disabled</option>
              <option>Enabled</option>
            </select>
          </div>
        </div>

      </div>
    </div>

    <!-- Buttons -->
    <div class="text-end">
      <button type="reset" class="btn btn-outline-secondary">Cancel</button>
      <button type="submit" class="btn btn-primary">Save Settings</button>
    </div>

  </form>
            </div>

           

            <!-- Security Tab -->
            <div class="tab-pane fade" id="securityTab">
              <form>
                <div class="row g-3">
                  <div class="col-md-12">
                    <div class="form-group">
                    <label class="form-label">Current Password</label>
                    <input type="password" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">New Password</label>
                      <input type="password" class="form-control">
                    </div>
                  </div>

                  <div class="col-md-6">
                    <div class="form-group">
                      <label class="form-label">Confirm Password</label>
                      <input type="password" class="form-control">
                    </div>
                  </div>
                </div>

                <div class="text-end mt-4">
                  <button class="btn btn-warning">Update Password</button>
                </div>
              </form>
            </div>

            <!-- Notifications Tab -->
            <div class="tab-pane fade" id="notificationTab">
              <form>
                <div class="form-group">
                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" checked>
                  <label class="form-check-label">
                    Warranty Expiry Alerts
                  </label>
                </div>
                </div>
                <div class="form-group">
                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox" checked>
                  <label class="form-check-label">
                    Maintenance Reminders
                  </label>
                </div>
                </div>
                <div class="form-group">
                <div class="form-check mb-3">
                  <input class="form-check-input" type="checkbox">
                  <label class="form-check-label">
                    Promotional Emails
                  </label>
                </div>
</div>
                <div class="text-end mt-4">
                  <button class="btn btn-primary">Save Preferences</button>
                </div>
              </form>
            </div>

          </div>

        </div>
      </div>
    </div>
  </div>
    




    </div>
  </div><!-- content-wrapper ends -->
</div><!-- main-panel ends -->

</div>
                    

  <script>

var options = {

chart:{
type:'line',
height:300
},

series:[{
name:'Cargo Demand',
data:[30,40,35,50,49,60,70]
}],

xaxis:{
categories:['Jan','Feb','Mar','Apr','May','Jun','Jul']
}

};

var chart = new ApexCharts(
document.querySelector("#forecastChart"),
options
);

chart.render();

</script>
@include('ship-owner.include.footer')
