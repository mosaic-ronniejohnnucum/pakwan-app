<template>
  <section class="dashboard-content">
    <div id="home">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="dashboard-title">
              <h3>Home</h3>
              <p>Welcome Back Charlene!</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div id="notifications">
              <!--note-->
              <SectionMaintenance />
              <!--announcement-->
              <SectionAnnouncement />
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <SectionChecklist />
          </div>
          <!--dashboard right-->
          <div class="col-md-7">
            <div id="dashboard-right">
              <div
                class="
                  core-solutions
                  text-left
                  d-flex
                  align-items-center
                  justify-content-between
                "
              >
                <div class="core-box pos">
                  <div class="img-box">
                    <a href="#">
                      <img src="~/assets/images/pos.png" />
                    </a>
                  </div>
                  <div
                    class="d-flex align-items-center justify-content-between"
                  >
                    <a
                      href=""
                      class="core-title"
                      data-toggle="modal"
                      data-target="#"
                      >POS</a
                    >
                    <!--show icon here if any-->
                  </div>
                </div>

                <div class="core-box purchasing">
                  <div class="img-box">
                    <a
                      href="#"
                      data-toggle="modal"
                      data-target="#purchasingModal"
                    >
                      <img src="~/assets/images/purchasing.png" />
                    </a>
                  </div>
                  <div
                    class="d-flex align-items-center justify-content-between"
                  >
                    <a
                      href=""
                      class="core-title"
                      data-toggle="modal"
                      data-target="#purchasingModal"
                      >Purchasing</a
                    >
                    <i class="fas fa-exclamation-circle"></i>
                  </div>
                </div>
                <!-- Modal -->
                <ModalExpandAccount />
                <!--end modal-->

                <div class="core-box analytics">
                  <div class="img-box">
                    <a href="#">
                      <img src="~/assets/images/analytics.png" />
                    </a>
                  </div>
                  <div
                    class="d-flex align-items-center justify-content-between"
                  >
                    <a
                      href=""
                      class="core-title"
                      data-toggle="modal"
                      data-target="#"
                      >Analytics</a
                    >
                    <i class="fas fa-exclamation-circle"></i>
                  </div>
                </div>
              </div>
              <!--menu health-->
              <SectionMenuHealth />
              <SectionOutletData />
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