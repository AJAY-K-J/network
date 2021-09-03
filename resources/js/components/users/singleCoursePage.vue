<template>
  <div>
    <!--
Welcome Slider
==================================== -->

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="block pt-5 mt-3">
            <div class="row bg-light animate-in-down shadow-lg">
              <div class="p-4 col-md-6 align-self-center text-color pl-5">
                <p class="pb-2">
                  Courses <i class="fas fa-chevron-right fa-fw"></i>
                  {{ single_category.category_name }}
                </p>
                <h2 class="font-weight-bold">
                  {{ single_course.course_name }}
                </h2>
                <p class="my-4">
                 {{ single_course.small_description}}
                </p>
                <p class="my-4">
                  <i class="fas fa-hourglass-half fa-fw"></i> Duration :<span
                    class="font-weight-bold"
                  >
                    {{ single_course.course_duration }}
                  </span>
                </p>
                <p class="my-4">
                  <i class="fas fa-book-reader fa-fw"></i> Exam Code:
                  <span class="font-weight-bold">{{
                    single_course.course_code
                  }}</span>
                </p>

                <div class="mt-5">
                  <button
                    class="btn btn btn-dark rounded-pill"
                    type="button"
                    data-toggle="modal"
                    data-target="#enquireModal"
                  >
                    Enroll Now <i class="fas fa-angle-double-right fa-fw"></i>
                  </button>

                  <a
                    class="btn btn btn-outline-dark rounded-pill ml-3"
                    href="#"
                  >
                    Syllabus <i class="fas fa-download fa-fw"></i
                  ></a>
                </div>
              </div>

              <div class="p-0 col-md-6 main-course-single">
                <img
                  class="d-block img-fluid float-right"
                  :src="'/uploads/course_images/' + single_course.course_image"
                  alt="first slide"
                />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--
Start About Section
==================================== -->
    <section class="service-2 section">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- section title -->
            <div class="title text-center">
              <h4 class="pb-2">Course Description</h4>

              <div class="border"></div>

              <p class="p-100 text-justify">
                {{ single_course.course_description }}
              </p>
            </div>
            <div class="text-center mt-5">
              <button
                class="btn btn-lg btn-dark rounded-pill"
                type="button"
                data-toggle="modal"
                data-target="#enquireModal"
              >
                Enroll Now <i class="fas fa-angle-double-right fa-fw"></i>
              </button>

              <a class="btn btn-lg btn-outline-dark rounded-pill ml-3" href="#">
                Syllabus <i class="fas fa-download fa-fw"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
      <!-- End row -->
      <!-- End container -->
    </section>
    <!-- End section -->

    <!--
Start About Section
==================================== -->
    <section class="service-2 section" v-if="batch_time.length !==0">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <!-- section title -->
            <div class="title text-center">
              <h4 class="pb-2">Upcoming Batches</h4>

              <div class="border"></div>

              <!-- /section title -->

              <div class="text-centr row justify-content-md-center">

                <!-- v loop starts  -->

<div v-for="batch in batch_time" :key="batch.id">

                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="service-item batch-show">
                    <i class="far fa-clock"></i>
                    <h5>{{ batch.batch_starting_date }}</h5><span> <h6 class="text-muted">{{ batch.class_starting_time }}12.00 am to {{ batch.class_ending_time }}12.22 pm Batch Starts on {{ batch.batch_starting_date }}</h6></span>


                  </div>
                </div>


               </div>


 <!-- v loop ends -->

              </div>
            </div>
            <!-- /section title -->
          </div>
        </div>
        <!-- End row -->
      </div>
      <!-- End container -->
    </section>
    <!-- End section -->

   <!--**************ENQUIRE-NOW-MODAL)***********-->

<enquiry-form></enquiry-form>

    <!--**************ENQUIRE-NOW-MODAL END)*****************************************************************-->
  </div>
</template>

<script>
export default {
  props: ["single_course",'single_category','batch_time'],

  data() {
    return {};
  },

  created() {

  },
};
</script>

<style>
</style>
