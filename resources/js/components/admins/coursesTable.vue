<template>
  <div class="container-fluid">
    <!-- Large modal -->
    <div
      class="modal fade course-modal-lg"
      tabindex="-1"
      data-backdrop="static"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <courses-page> </courses-page>
        </div>
      </div>
    </div>

    <!-- modal end -->

    <!-- course table  -->

    <div class="card mt-3 shadow">
      <div class="card-header">
        <button
          type="button"
          class="btn btn btn-sm-block btn-dark rounded-pill float-right shadow"
          data-toggle="modal"
          data-target=".course-modal-lg"
        >
          Add Course <i class="fas fa-plus-circle fa-fw"></i>
        </button>
        <span class="h5 font-weight-bold">Course List</span>
      </div>
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-sm">
            <thead>
              <tr>
                <th scope="col">Sl.No</th>
                <th scope="col">Course Name</th>
                <th scope="col">Short Name</th>
                <th scope="col">Course Code</th>
                <th scope="col">Small Description</th>
                <th scope="col">Course Description</th>
                <th scope="col">Duration</th>
                <th scope="col">Course Fee</th>
                <th scope="col">Certificate Fee</th>
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(course, index) in course_list" :key="course.id">
                <th scope="row">{{ index + 1 }}</th>
                <td>{{ course.course_name }}</td>
                <td>{{ course.course_short_name }}</td>
                <td>{{ course.course_code }}</td>
                <td>{{ course.small_description }}</td>
                <td>{{ course.course_description }}</td>
                <td>{{ course.course_duration }}</td>
                <td>{{ course.course_fee }}</td>
                <td>{{ course.course_certification_fee }}</td>
                <td>
                  <button
                    type="button"
                    class="btn btn-sm btn-dark rounded-pill"
                    data-toggle="modal"
                    data-target=".course-edit-modal-lg"
                    name=""
                    @click="editCourse(course)"
                  >
                    Edit
                  </button>
                </td>
              </tr>
            </tbody>
                </table>
        </div>
</div>
      <div class="card-footer text-muted"></div>
    </div>

    <!-- course table end -->
    <!-- Edit Course modal -->

    <div
      class="modal fade course-edit-modal-lg"
      tabindex="-1"
      data-backdrop="static"
      role="dialog"
      aria-labelledby="myLargeModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-xl">
        <div class="modal-content">
          <courses-page :edit="true"> </courses-page>
        </div>
      </div>
    </div>

    <!-- modal end -->
  </div>
</template>

<script>
export default {
  data() {
    return {
      course_list: {},
    };
  },

  created() {
    this.getCourses();
    var vm = this;
    bus.$on("course-added", function () {
      vm.getCourses();
    });
  },
  methods: {
    getCourses() {
      axios.get("/admin/get-courses").then((response) => {
        this.course_list = response.data;
      });
    },

    editCourse(course) {
      bus.$emit("edit-course", course);
    },
  },
};
</script>

<style>
</style>
