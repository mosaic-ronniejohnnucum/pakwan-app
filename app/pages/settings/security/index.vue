<template>
  <section class="dashboard-content">
      <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="dashboard-title">
                    <h3>Security</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <SectionSettings />
                </div>
                <div class="col-md-9">
                    <div class="checklist">
                        <div id="security">
                            <h4>Security</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <form>
                                <div class="d-flex d-align-items-center justify-content-between">
                                    <div class="form-group">
                                        <div>
                                            <label for="first">Current Password</label>
                                            <input type="text" placeholder="Current Password">
                                        </div>
                                        <div>
                                            <label for="email">New Password</label>
                                            <input type="email" placeholder="New Password">
                                        </div>
                                        <div>
                                            <label for="email">Confirm Password</label>
                                            <input type="email" placeholder="Confirm Password">
                                        </div>
                                    </div>
                                    <div id="rules">
                                        <b>Rules for Password</b>
                                        <p>To create a new password, you must meet all of the following requirements</p>
                                        <ul>
                                            <li>Minimum 8 characters</li>
                                            <li>Atleast one special character</li>
                                            <li>Atleast one number</li>
                                            <li>Can’t be same as previous</li>
                                        </ul>
                                    </div>
                                </div>
                                <button class="float-right btn btn-primary" disabled>Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
export default {
    layout : 'main'
}
</script>