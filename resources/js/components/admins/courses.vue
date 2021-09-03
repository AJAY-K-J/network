<template>
  <div>
    <div class="modal-header">
      <h5 class="modal-title"></h5>
      <button
        type="button"
        ref="cancel_course_btn"
        class="close"
        data-dismiss="modal"
        aria-label="Close"
      >
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <!-- course  form  -->

      <div class="container-fluid">
       <!-- <div class="col-md-12">-->
          <div class="registration-form-admin">
            <form
              class="form-horizontal"
              method="POST"
              enctype="multipart/form-data"
              @submit.prevent="addCourse()"
            >
              <div class="card-body">
                <h4 class="card-title text-center">
                  <b>{{ title }} </b>
                </h4>



<div class="row">

                  <div class="col">
                    <div class="form-group">
                    <label for="Coursename" class="text-muted font-weight-bold">Enter Course Name</label>
                        <input
                          type="text"
                          class="form-control item shadow-sm"
                          id="course_name"
                          name="course_name"
                          placeholder="Enter Course Name "
                          v-model="course.course_name"
                        />
                      <small class="text-danger" v-if="errors.course_name">
                        {{ errors.course_name[0] }}</small
                      >
                    </div>

                    <div class="form-group">
                    <label for="Coursename" class="text-muted font-weight-bold">Enter Short Name For Course Name</label>
                        <input
                          type="text"
                          class="form-control item shadow-sm"
                          id="course_short_name"
                          name="course_short_name"
                          placeholder="Enter a short name for course name "
                          v-model="course.course_short_name"
                        />
                      <small
                        class="text-danger"
                        v-if="errors.course_short_name"
                      >
                        {{ errors.course_short_name[0] }}</small
                      >
                    </div>

                    <div class="form-group">
                       <label for="Coursename" class="text-muted font-weight-bold">Enter Course Code</label>
                        <input
                          type="text"
                          class="form-control item shadow-sm"
                          id="course_code"
                          name="course_code"
                          placeholder="Enter Course Code "
                          v-model="course.course_code"
                        />
                      <small class="text-danger" v-if="errors.course_code">
                        {{ errors.course_code[0] }}</small
                      >
                    </div>

                    <div class="form-group">
                    <label for="Coursename" class="text-muted font-weight-bold">Select Course Category</label>

                        <select
                          class="form-control item pb-1 shadow-sm"
                          id="course_category_id"
                          name="course_category_id"
                          v-model="course.course_category_id"
                        >
                          <option value="">Select Course Category</option>
                         <option
                        v-for="category in categories"
                        :key="category.id"
                        v-bind:value="category.id"
                      >
                        {{ category.category_name }}
                      </option>
                        </select>


                      <small
                        class="text-danger"
                        v-if="errors.course_category_id"
                        >{{ errors.course_category_id[0] }}</small
                      >
                    </div>

                    <div class="form-group">
                      <label for="Coursename" class="text-muted font-weight-bold">Enter Small Description for Course</label>
                        <textarea
                          class="form-control form-height item shadow-sm"
                          rows="1"
                          name="small_description"
                        placeholder="Enter small description of course"
                          v-model="course.small_description"
                        ></textarea>


                      <small
                        class="text-danger"
                        v-if="errors.small_description"
                        >{{ errors.small_description[0] }}</small
                      >
                    </div>

                    <div class="form-group">
                      <label for="Coursename" class="text-muted font-weight-bold">Detailed Description for course</label>
                        <textarea
                          class="form-control form-height item shadow-sm"
                          rows="1"
                          name="course_description"
                            placeholder="Enter detailed description of course"
                          v-model="course.course_description"
                        ></textarea>


                      <small
                        class="text-danger"
                        v-if="errors.course_description"
                        >{{ errors.course_description[0] }}</small
                      >
                    </div>
                  </div>
<div class="col">
                    <div class="form-group">
 <label for="Coursename" class="text-muted font-weight-bold">Course Duration </label>
                        <input
                          type="text"
                          class="form-control item shadow-sm"
                          id="course_duration"
                          name="course_duration"
                          placeholder="Enter course duration "
                          v-model="course.course_duration"
                        />


                      <small class="text-danger" v-if="errors.course_duration">
                        {{ errors.course_duration[0] }}</small
                      >
                    </div>

                    <div class="form-group">
                       <label for="Coursename" class="text-muted font-weight-bold">Enter Course Fee</label>

                        <input
                          type="number"
                          class="form-control item shadow-sm"
                          id="course_fee"
                          name="course_fee"
                          placeholder="Enter Course Fee "
                          v-model="course.course_fee"
                        />


                      <small class="text-danger" v-if="errors.course_fee">
                        {{ errors.course_fee[0] }}</small
                      >
                    </div>

                    <div class="form-group">
                     <label for="Coursename" class="text-muted font-weight-bold">Enter Certification Fee</label>
                        <input
                          type="number"
                          class="form-control item shadow-sm"
                          id="course_certification_fee"
                          name="course_certification_fee"
                          placeholder="Enter certification fee "
                          v-model="course.course_certification_fee"
                        />

                      <small
                        class="text-danger"
                        v-if="errors.course_certification_fee"
                      >
                        {{ errors.course_certification_fee[0] }}</small
                      >
                    </div>
                    <div class="form-group">
                      <label for="Coursename" class="text-muted font-weight-bold">Enter Certification Code</label>
                        <input
                          type="text"
                          class="form-control item shadow-sm"
                          id="course_certification_code"
                          name="course_certification_code"
                          placeholder="Enter certification code "
                          v-model="course.course_certification_code"
                        />

                      <small
                        class="text-danger"
                        v-if="errors.course_certification_code"
                      >
                        {{ errors.course_certification_code[0] }}</small
                      >
                    </div>

                    <div class="form-group">
                    <label for="Coursename" class="text-muted font-weight-bold">Course Image</label>
                        <input
                          type="file"
                          class="form-control shadow-sm pb-3"
                          id="course_image"
                          name="course_image"
                          placeholder="course_image"
                          ref="course_image"
                          accept="image/*"
                          @change="CourseImage($event)"
                         style=" border-radius: 25px 25px 25px 25px; width:100% ;"/>

                      <small class="text-danger" v-if="errors.course_image">
                        {{ errors.course_image[0] }}</small
                      >
                    </div>

                    <div class="border-top ">
                      <div class="card-body text-end float-right">
                        <button
                          type="submit"
                          class="btn btn-dark rounded-pill"
                          name="submitCourse"
                          :disabled="isloading"
                        >
                          Save Course<i class="fas fa-angle-double-right fa-fw"></i>
                        </button>
                      </div>
                    </div>
                  </div>
 </div></div>

            </form>
        </div>


        <!-- course form  -->
      </div>

      <div class="modal-footer"></div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["edit", "category_list"],
  data() {
    return {
      title: "Add Course",
      isloading: false,
      course: {
id:'',
        course_name: "",
        course_short_name: "",
        course_code: "",
        course_category_id: "",
        small_description: "",
        course_description: "",
        course_duration: "",
        course_fee: "",
        course_certification_fee: "",
        course_certification_code: "",
        course_image: "",
      },
categories:{},
      errors: {},
    };
  },
  mounted() {},
  created() {
    this.getCategory();
    if (this.edit) {
      var vm = this;
      vm.title = "Edit Course";
      bus.$on("edit-course", function (course) {
        vm.clear_form_field();
        vm.course.id = course.id;
        vm.course.course_name = course.course_name;
        vm.course.course_short_name = course.course_short_name;
        vm.course.course_code = course.course_code;
        vm.course.course_category_id = course.course_category_id;
        vm.course.small_description = course.small_description;
        vm.course.course_description = course.course_description;
        vm.course.course_duration = course.course_duration;
        vm.course.course_fee = course.course_fee;
        vm.course.course_certification_fee = course.course_certification_fee;
        vm.course.course_certification_code = course.course_certification_code;
      });
    }
  },
  methods: {
    addCourse() {
      this.isloading = true;
      let upload = new FormData();
      if (this.edit) {
        upload.append("id", this.course.id);
      }
      upload.append("course_name", this.course.course_name);
      upload.append("course_short_name", this.course.course_short_name);
      upload.append("course_code", this.course.course_code);
      upload.append("course_category_id", this.course.course_category_id);

      upload.append("small_description", this.course.small_description);
      upload.append("course_description", this.course.course_description);
      upload.append("course_duration", this.course.course_duration);

      upload.append("course_fee", this.course.course_fee);
      upload.append(
        "course_certification_fee",
        this.course.course_certification_fee
      );
      upload.append(
        "course_certification_code",
        this.course.course_certification_code
      );

      upload.append("course_image", this.course.course_image);

      axios
        .post("/admin/add-course", upload)
        .then((response) => {
          if (response.data == "success") {
            this.clear_form_field();
            this.$refs.cancel_course_btn.click();
            this.$refs.course_image.value = "";

            bus.$emit("course-added");
          }

          this.isloading = false;
        })
        .catch((error) => {
          this.errors = error.response.data.errors;
          console.log("errors");
          this.isloading = false;
        });
    },

    getCategory(){

axios.get('/admin/categories').then((response) => {
this.categories=response.data;

}).catch((err) => {

});
    },

    CourseImage(e) {
      this.course.course_image = e.target.files[0];
    },
    clear_form_field() {
      for (let data in this.course) {
        this.course[data] = "";
      }

      for (let er in this.errors) {
        this.errors[er] = "";
      }
    },
  },
};
</script>
