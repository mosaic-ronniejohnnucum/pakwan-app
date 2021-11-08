<template>
  <section class="dashboard-content">
      <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="dashboard-title">
                    <h3>Settings</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <SectionSettings />
                </div>
                <div class="col-md-9">
                    <div class="checklist">
                        <div id="personal">
                            <h4>Personal Information</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <form>
                                <div class="d-flex d-align-items-center justify-content-between">
                                    <div class="image-upload">
                                        <!-- Styled -->
                                        <b-form-file
                                        v-model="file1"
                                        :state="Boolean(file1)"
                                        placeholder="Choose a file or drop it here..."
                                        drop-placeholder="Drop file here..."
                                        ></b-form-file>
                                        <div class="mt-3">Selected file: {{ file1 ? file1.name : '' }}</div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label for="first">First Name</label>
                                            <input type="text" placeholder="First Name" value="Charlene" disabled>
                                        </div>
                                        <div>
                                            <label for="email">Email Address</label>
                                            <input type="email" placeholder="Email" value="charlener@mosaic-solutions.com" disabled>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div>
                                            <label for="last">Last Name</label>
                                            <input type="text" placeholder="Last Name" value="Rodriguez" disabled>
                                        </div>
                                        <div>
                                            <label for="account">Account Type</label>
                                            <input type="text" value="Admin" disabled>
                                        </div>
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
    layout : 'main',
    data() {
      return {
        file1: null,
        file2: null
      }
    }
}
</script>