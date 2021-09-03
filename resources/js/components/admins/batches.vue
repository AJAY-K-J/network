<template>



<div>

<!-- modal  -->

    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"></h5>
        <button type="button" class="close" ref='batches_close_btn' data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

<!-- content  -->


  <div class="row">
    <div class="col-md-12">
      <div class="registration-form-admin">
        <form
          class="form-horizontal"
          method="POST"
          enctype="multipart/form-data"
          @submit.prevent="addBatch()"
        >
          <div class="card-body">
            <h4 class="card-title text-center">
              <b>{{ title }} </b>
            </h4>

            <div class="form-group" v-if="course_id_input ">
              <label
                for="course-starting-date"
                class="text-muted font-weight-bold"
                >Select Course Name</label
              >

              <select
                class="form-control item shadow-sm"
                id="course_id"
                name="course_id"
                v-model="batch.course_id"
              >
                <option value="" class="pb-3">Select Course</option>
                <option v-for=" course in course_list" :key="course.id" v-bind:value="course.id"> {{ course.course_name }} </option>
              </select>

              <small class="text-danger" v-if="errors.course_id">{{
                errors.course_id[0]
              }}</small>
            </div>

            <div class="form-group">
              <label
                for="course-starting-date"
                class="text-muted font-weight-bold"
                >Course Starting Date</label
              >
              <input
                type="date"
                class="form-control item shadow-sm"
                id="batch_starting_date"
                name="batch_starting_date"
                placeholder="batch_starting_date "
                v-model="batch.batch_starting_date"
              />

              <small class="text-danger" v-if="errors.batch_starting_date">
                {{ errors.batch_starting_date[0] }}</small
              >
            </div>

            <div class="form-group">
              <label
                for="course-starting-date"
                class="text-muted font-weight-bold"
                >Select Batch Time</label
              >

              <input
                type="time"
                class="form-control item shadow-sm"
                id="batch_time"
                name="batch_time"
                placeholder="batch_time "
                v-model="batch.batch_time"
              />

              <small class="text-danger" v-if="errors.batch_time">
                {{ errors.batch_time[0] }}</small
              >
            </div>

            <div class="border-top text-center">
              <div class="card-body text-end">
                <button
                  type="submit"
                  class="btn btn btn-dark rounded-pill shadow"
                  name="submitBatch"
                  :disabled="isloading"
                >
                  Save
                </button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

<!-- content  end-->

      </div>
      <div class="modal-footer">

      </div>
<!-- modal  end-->
</div>




</template>

<script>
export default {
  props:['edit'],
  data() {
    return {
      isloading: false,
      course_id_input:true,
      title:'Add New Batch',
      batch: {
        id:'',
        course_id: "",
        batch_starting_date: "",
        batch_time: "",
        class_starting_time:"",
        class_ending_time:'',
      },
course_list:{},
      errors: {},
    };
  },
  mounted() {},
  created() {

this.getBatchCourses();

if(this.edit){
this.title='Edit Batch';
this.course_id_input=false;
var vm  =this;
bus.$on('edit-batches',function (batches) {

vm.clear_form_field();
vm.batch.id=batches.id;
vm.batch.course_id=batches.course_id;
vm.batch.batch_starting_date=batches.batch_starting_date;
vm.batch.batch_time=batches.batch_time;

});




}


  },
  methods: {
    addBatch() {
      this.isloading = true;
      let upload = new FormData();

if(this.edit){
   upload.append("id", this.batch.id);
}


      upload.append("course_id", this.batch.course_id);
      upload.append("batch_starting_date", this.batch.batch_starting_date);
      upload.append("batch_time", this.batch.batch_time);

      axios
        .post("/admin/add-batch", upload)
        .then((res) => {
          console.log("succss");
          this.clear_form_field();
this.$refs.batches_close_btn.click();
bus.$emit("batches-added");
          this.isloading = false;
        })
        .catch((error) => {
          this.errors = error.response.data.errors;
          this.isloading = false;
          console.log("errors");

        });
    },

getBatchCourses(){

axios.get('/admin/get-batch-courses').then((response) => {

this.course_list=response.data;


}).catch((err) => {



});

},




    clear_form_field() {
      for (let data in this.batch) {
        this.batch[data] = "";
      }

      for (let er in this.errors) {
        this.errors[er] = "";
      }
    },
  },
};
</script>
