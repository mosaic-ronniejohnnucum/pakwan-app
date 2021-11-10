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
                        <div id="access">
                            <h4>Access Management</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <div class="invite-user d-flex align-items-center justify-content-end">
                                <div class="search position-relative mr-2">
                                    <i class="fas fa-search position-absolute"></i>
                                    <input type="text" placeholder="Search user">
                                </div>
                                <button class="btn btn-primary mosaic-blue-primary d-flex align-items-center justify-content-center">
                                    <i class="fas fa-envelope mr-1"></i> Invite User
                                </button>
                            </div>
                            <div class="w-100 float-left user-table">
                                <div class="user-tabs">
                                    <b-tabs content-class="mt-3">
                                        <b-tab title="First" active>
                                            <div>
                                                <b-table responsive :fields="fieldsLocation" :items="items" head-variant="blue">
                                                    <template #cell(name)="data">
                                                        <b>{{ data.item.name }}</b><br><small>{{ data.item.email }}</small>
                                                    </template>
                                                     <template #cell(user)="data">
                                                        <b>{{ data.item.user }}</b>
                                                    </template>
                                                    <template #cell(actions)="data" >
                                                        <div class="actions d-flex justify-content-start btn-container">
                                                            <nuxt-link :to="`/access-management/edit/${data.item.id}`" class="mr-3"><i class="fas fa-eye"></i> View</nuxt-link>
                                                            <nuxt-link :to="`/access-management/edit/${data.item.id}`" class="mr-3"><i class="fas fa-cog"></i> Modify</nuxt-link>
                                                            <a class="delete"  href="" @click.prevent="doDelete('items',data.item.id)"><i class="fas fa-times"></i> Delete</a>
                                                        </div>
                                                    </template>   
                                                </b-table>
                                            </div>
                                        </b-tab>
                                        <b-tab title="Second">
                                            <p>I'm the second tab</p>
                                        </b-tab>
                                    </b-tabs>
                                </div>
                                <div class="pagination d-flex d-align-center justify-content-between">
                                    <strong>Showing 1 of 1</strong>
                                    <b-pagination
                                    v-model="currentPage"
                                    :total-rows="totalRows"
                                    :per-page="perPage"
                                    align="fill"
                                    size="sm"
                                    class="my-0"
                                    ></b-pagination>
                                </div>
                            </div>
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
          fieldsLocation: [
              {
                  label: 'Name',
                  key: 'name'
              },
              {
                  label: 'User Role',
                  key: 'user'
              },
              {
                  label: 'Actions',
                  key: 'actions'
              }
          ],
        items: [
          { name: 'John Doe', email: 'johnd@mosaic-solutions.com', user: 'Admin' },
          { name: 'Ron Nucum', email: 'ronnien@mosaic-solutions.com', user: 'Admin' },
          { name: 'Joseph Molinas', email: 'josephm@mosaic-solutions.com', user: 'Admin' }
        ]
      }
    }
}
</script>