<template>
  <div>
    <!--**************ENQUIRE-NOW-MODAL(NEED TO BE TRANSFER TO VUE COMPONENT , this is a temp place)***********-->
    <!-- Modal -->
    <div
      class="modal fade"
      id="enquireModal"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalLabel4"
      aria-hidden="true"
    >
      <div
        class="modal-dialog modal-dialog-centered modal-dialog-zoom modal-lg"
        role="document"
      >
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Enroll Now</h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="container">
              <form
                method="POST"
                enctype="multipart/form-data"
                @submit.prevent="addEnquiry()"
              >
                <div class="form-group row">
                  <input
                    type="text"
                    class="form-control rounded-pill"
                    id="enquirer_name"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Name"
                    enquirer_name="enquirer_name"
                    v-model="enquiry.enquirer_name"
                  />
                  <small class="text-danger" v-if="errors.enquirer_name">
                    {{ errors.enquirer_name[0] }}</small
                  >
                </div>

                <div class="form-group row">
                  <input
                    type="email"
                    class="form-control rounded-pill"
                    id="enquirer_email"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Email Address"
                    name="enquirer_email"
                    v-model="enquiry.enquirer_email"
                  />
                  <small class="text-danger" v-if="errors.enquirer_email">
                    {{ errors.enquirer_email[0] }}</small
                  >
                </div>

                <div class="form-group row">
                  <input
                    type="phone"
                    class="form-control rounded-pill"
                    id="enquirer_mobile "
                    aria-describedby="emailHelp"
                    placeholder="Enter Your phone number"
                    name="enquirer_mobile "
                    v-model="enquiry.enquirer_mobile"
                  />
                  <small class="text-danger" v-if="errors.enquirer_mobile">
                    {{ errors.enquirer_mobile[0] }}</small
                  >
                </div>

                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <select
                        v-model="enquiry.enquirer_state"
                        name="enquirer_state"
                        class="form-control rounded-pill"
                      >
                        <option disabled value="">select state</option>
                        <option value="kerala">Kerala</option>
                        <option value="karnataka">Karnataka</option>
                        <option value="tamilnadu">Tamilnadu</option>
                      </select>
                      <small class="text-danger" v-if="errors.enquirer_state">
                        {{ errors.enquirer_state[0] }}</small
                      >
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <select
                        v-model="enquiry.enquirer_district"
                        name="enquirer_district"
                        class="form-control rounded-pill"
                      >
                        <option disabled value="">select District</option>
                        <option value="kozhikode">kozhikode</option>
                        <option value="alapuzha">Alapuzha</option>
                        <option value="kannur">Kannur</option>
                      </select>
                      <small
                        class="text-danger"
                        v-if="errors.enquirer_district"
                      >
                        {{ errors.enquirer_district[0] }}</small
                      >
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control rounded-pill"
                        id="enquirer_street"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Street Name"
                        name="enquirer_street"
                        v-model="enquiry.enquirer_street"
                      />
                      <small class="text-danger" v-if="errors.enquirer_street">
                        {{ errors.enquirer_street[0] }}</small
                      >
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control rounded-pill"
                        id="enquirer_pin"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Zip Code"
                        name="enquirer_pin"
                        v-model="enquiry.enquirer_pin"
                      />
                      <small class="text-danger" v-if="errors.enquirer_pin">
                        {{ errors.enquirer_pin[0] }}</small
                      >
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <input
                    type="date"
                    class="form-control rounded-pill"
                    id="enquirer_dob"
                    aria-describedby="emailHelp"
                    placeholder="select dob"
                    name="enquirer_dob"
                    v-model="enquiry.enquirer_dob"
                  />
                  <small class="text-danger" v-if="errors.enquirer_dob">
                    {{ errors.enquirer_dob[0] }}</small
                  >
                </div>

                <div class="form-group">
                  <select
                    v-model="enquiry.enquirer_education"
                    name="enquirer_education"
                    class="form-control rounded-pill"
                  >
                    <option disabled value="">select Qualification</option>
                    <option value="sslc">Sslc</option>
                    <option value="plus two">Plus Two</option>
                    <option value="degree">Degree</option>
                    <option value="post graduation">Post Graduation</option>
                    <option value="others">Others</option>
                  </select>
                  <small class="text-danger" v-if="errors.enquirer_education">
                    {{ errors.enquirer_education[0] }}</small
                  >
                </div>

                <div class="form-group">
                  <select
                    v-model="enquiry.enquirer_preferred_course"
                    name="enquirer_preferred_course"
                    class="form-control rounded-pill"
                    
                  >
                    <option disabled value="">select intrested course</option>
                    <option value="course a">course a</option>
                    <option value="course b">course b</option>
                  </select>
                  <small
                    class="text-danger"
                    v-if="errors.enquirer_preferred_course"
                  >
                    {{ errors.enquirer_preferred_course[0] }}</small
                  >
                </div>

                <div class="form-group">
                  <select
                    v-model="enquiry.enquirer_preferred_course_time"
                    name="enquirer_preferred_course_time"
                    class="form-control rounded-pill"
                  >
                    <option disabled value="">select intrested batch</option>
                    <option value="batch a">batch a</option>
                    <option value="batch b">batch b</option>
                  </select>
                  <small
                    class="text-danger"
                    v-if="errors.enquirer_preferred_course_time"
                  >
                    {{ errors.enquirer_preferred_course_time[0] }}</small
                  >
                </div>

                <div class="form-group">
                  <textarea
                    v-model="enquiry.enquirer_remarks"
                    name="enquirer_remarks"
                    placeholder="add remarks here"
                    class="form-control"
                  ></textarea>
                </div>

                <div class="text-center pt-2 pb-3">
                  <button
                    type="submit"
                    class="btn btn btn-outline-dark rounded-pill"
                  >
                    Submit <i class="fas fa-angle-double-right fa-fw"></i>
                  </button>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <button
                type="button"
                class="btn btn-sm btn-outline-dark rounded-pill"
                data-dismiss="modal"
              >
                Close <i class="far fa-times-circle fa-fw"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--**************ENQUIRE-NOW-MODAL END)*****************************************************************-->
  </div>
</template>

<script>
export default {
  data() {
    return {

   
      enquiry: {
        enquirer_name: "",
        enquirer_email: "",
        enquirer_mobile: "",
        enquirer_dob: "",
        enquirer_district: "",
        enquirer_state: "",
        enquirer_street: "",
        enquirer_pin: "",
        enquirer_education: "",
        enquirer_preferred_course: "",
        enquirer_preferred_course_time: "",
        enquirer_remarks: "",
      },

      errors: {},
    };
  },

  methods: {
    addEnquiry() {
      axios
        .post("/add-enquiry", this.enquiry)
        .then((res) => {
          console.log("succsss");
        })
        .catch((error) => {
          this.errors = error.response.data.errors;
          console.log("errors");
        });
    },
  },
  mounted() {},
};
</script>

<style>
</style>
