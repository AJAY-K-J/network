<template>
  <div>
   


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
                    id="name"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Name"
                    name="name"
                    v-model="enquiry.name"
                  />
                </div>

                <div class="form-group row">
                  <input
                    type="email"
                    class="form-control rounded-pill"
                    id="email"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your Email Address"
                    name="email"
                    v-model="enquiry.email"
                  />
                </div>

                <div class="form-group row">
                  <input
                    type="phone"
                    class="form-control rounded-pill"
                    id="phone"
                    aria-describedby="emailHelp"
                    placeholder="Enter Your phone number"
                    name="phonenumber"
                    v-model="enquiry.phonenumber"
                  />
                </div>

                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <select
                        v-model="enquiry.state"
                        class="form-control rounded-pill"
                      >
                        <option disabled value="">select state</option>
                        <option value="kerala">Kerala</option>
                        <option value="karnataka">Karnataka</option>
                        <option value="tamilnadu">Tamilnadu</option>
                      </select>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <select
                        v-model="enquiry.district"
                        class="form-control rounded-pill"
                      >
                        <option disabled value="">select District</option>
                        <option value="kozhikode">kozhikode</option>
                        <option value="alapuzha">Alapuzha</option>
                        <option value="kannur">Kannur</option>
                      </select>
                    </div>
                  </div>

                  <div class="col">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control rounded-pill"
                        id="street"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Street Name"
                        name="streetname"
                        v-model="enquiry.street"
                      />
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <input
                        type="text"
                        class="form-control rounded-pill"
                        id="zip"
                        aria-describedby="emailHelp"
                        placeholder="Enter Your Zip Code"
                        name="zip"
                        v-model="enquiry.zipcode"
                      />
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <input
                    type="date"
                    class="form-control rounded-pill"
                    id="zip"
                    aria-describedby="emailHelp"
                    placeholder="select dob"
                    name="dob"
                    v-model="enquiry.dob"
                  />
                </div>

                <div class="form-group">
                  <select
                    v-model="enquiry.qualification"
                    class="form-control rounded-pill"
                  >
                    <option disabled value="">select Qualification</option>
                    <option value="sslc">Sslc</option>
                    <option value="plus two">Plus Two</option>
                    <option value="degree">Degree</option>
                    <option value="post graduation">Post Graduation</option>
                    <option value="others">Others</option>
                  </select>
                </div>

                <div class="form-group">
                  <select
                    v-model="enquiry.intrestedCourse"
                    class="form-control rounded-pill"
                  >
                    <option disabled value="">select intrested course</option>
                    <option value="course a">course a</option>
                    <option value="course b">course b</option>
                  </select>
                </div>

                <div class="form-group">
                  <select
                    v-model="enquiry.intrestedBatch"
                    class="form-control rounded-pill"
                  >
                    <option disabled value="">select intrested batch</option>
                    <option value="batch a">batch a</option>
                    <option value="batch b">batch b</option>
                  </select>
                </div>

                <div class="form-group">
                  <textarea
                    v-model="enquiry.remarks"
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


    <!--**************ENQUIRE-NOW-MODAL END)*****************************************************************-->
  </div>
</template>

<script>
export default {
  data() {
    return {
      enquiry: {
        name: "",
        email: "",
        phonenumber: "",
        state: "",
        district: "",
        street: "",
        zipcode: "",
        dob: "",
        qualification: "",
        intrestedCourse: "",
        intrestedBatch: "",
        remarks: "",
      },

      errors: {},
    };
  },

  methods: {
    addEnquiry() {
      axios
        .post("/add-enquiry-test", this.enquiry)
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
