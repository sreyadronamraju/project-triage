var patientTriageApp = new Vue({
  el: '#patientTriageApp',
  data: {
    patient: {}
  },
  methods: {
    handleSubmit() {
      // TODO: Add the correct date via Javascript before posting

       // TODO:
       fetch(url, {
       method:'post',
       body: JSON.stringify(this.patient)
       headers: {
         "Content-Type":"application/json; charset=utf-8"
       }
       })
       .then( response => response.json())
       .then( json => {waitingApp.patients = json})
       .catch( err => {
         console.error('WORK TRIAGE ERROR:');
         console.error(err);
       })
       
       this.handleReset();
    },
    handleReset() {
      this.patient = {
        patientGuid: '',
        firstName: '',
        lastName: '',
        dob: '',
        sexAtBirth: '',
        visitDescription: '',
        // visitDateUtc
        priority: 'low'
      }
    }
  },
  created() {
    this.handleReset();
  }
});
