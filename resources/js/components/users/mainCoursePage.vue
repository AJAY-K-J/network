<template>
  <div>
    <section>
      <!-- As a heading -->
      <nav
        class="navbar navbar-expand-lg navbar-course-category"
        style="color: rgba(82, 74, 74, 0.781)"
      >
        <!-- <span class="navbar-brand mb-0 h1 px-3">Courses
         </span><span class="vl">  </span>  -->

        <span class="navbar-brand mb-0 h1 px-3 font-weight-bold">Courses </span
        >

        <div v-for="category in category_list " :key="category.id">
        <i class="fas fa-chevron-right"></i>

         <a :href="'/courses/' + category.id" ><span class="navbar-brand mb-0 h1 px-3" >{{category.category_name}}</span
        > </a>
</div>


      </nav>
    </section>

    <!-- Start courses
		=========================================== -->
    <section class="team-course-home" id="team">
      <div class="container-fluid px-5">
        <div class="row">
          <!-- Course Card  -->
          <div
            class="col-md-3 pt-3"
            v-for="course in course_list"
            :key="course.id"
          >
            <div class="report-module">
              <div class="thumbnail">
                <a href="#"
                  ><img
                    :src="'/uploads/course_images/' + course.course_image"
                    class="img-fluid"
                /></a>
              </div>
              <div class="post-content">
                <a href="/"
                  ><div class="category btn">Enroll Now</div></a
                >
                <h6 class="">{{ course.course_name }}</h6>
                <p class="text-justify">{{ course.small_description }}</p>
                <a :href="'/courseView/' + course.id">
                  <button
                    type="button"
                    class="btn btn-sm btn-outline-dark rounded-pill float-right"
                  >
                    More <i class="fas fa-chevron-circle-right fa-fw"></i>
                  </button>
                </a>
              </div>
            </div>
          </div>

          <!-- Course Card end  -->
        </div>
      </div>
    </section>
    <!-- End section -->
  </div>
</template>

<script>
export default {
  props:['category_list','course_list'],
  data() {
    return {

    };
  },

  created() {

  },
}
</script>

<style>
</style>

