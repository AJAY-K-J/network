<template>
  <div>







 <!-- batches modal  -->

<!-- Modal -->
<div class="modal fade batches-modal-lg" id="batches-modal" tabindex="-1" role="dialog" aria-labelledby="batches-modalTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
  <batches-page> </batches-page>
    </div>
  </div>
</div>

    <!-- modal end -->

    <!-- batches table  -->


<div class="card mt-3 shadow ">
  <div class="card-header">
<button type="button" class="btn btn btn-sm-block btn-dark rounded-pill float-right shadow" data-toggle="modal" data-target="#batches-modal">
    Add batches <i class="fas fa-plus-circle fa-fw"></i></button>
    <span class="h5 font-weight-bold">Course batches List</span>
  </div>
  <div class="card-body">
    <div class="table-responsive">
  <table class="table ">
    <thead>
      <tr>
        <th scope="col">Sl.No</th>
        <th scope="col">Course id</th>
          <th scope="col">Date</th>
            <th scope="col">Time</th>
        <th scope="col">Actions</th>


      </tr>
    </thead>
    <tbody>
    <tr v-for="(batches, index) in batches_list" :key="batches.id">
                <th scope="row">{{ index + 1 }}</th>
                <td>{{ batches.course_id }}</td>
<td>{{ batches.batch_starting_date }}</td>
<td>{{ batches.batch_time }}</td>
                <td>
                  <button
                    type="button"
                    class="btn btn-sm btn-dark rounded-pill"
                    data-toggle="modal"
                    data-target="#batches-edit-modal"
                    name=""
                    @click="editBatches(batches)"
                  >
                    Edit <i class="fas fa-edit fa-fw"></i>
                  </button>
                </td>


              </tr>


    </tbody>
  </table>
</div>
  </div>
  <div class="card-footer text-muted">

  </div>
</div>


<!-- batches table end -->

    <!-- Edit batches modal -->

   <!-- Modal -->
<div class="modal fade batches-edit-modal-lg" id="batches-edit-modal" tabindex="-1" role="dialog" aria-labelledby="batches-modalTitle" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
  <batches-page :edit="true"> </batches-page>
    </div>
  </div>
</div>

    <!-- modal end -->

    <!-- modal end -->
  </div>
</template>

<script>
export default {
  data() {
    return {
      batches_list: {},
    };
  },
  created() {
    this.getBatches();
    var vm = this;
    bus.$on("batches-added", function () {
      vm.getBatches();
    });
  },

  methods: {
    getBatches() {
      axios
        .get("/admin/get-batches")
        .then((response) => {
          this.batches_list = response.data;
        })
        .catch((err) => {
          console.log(err);
        });
    },

    editBatches(batches) {
      bus.$emit("edit-batches", batches);
    },
  },
};
</script>

<style>
</style>
