var editPersonApp = new Vue({ //1-var
  el: '#editPersonApp',   //1-html element id
  data: {
    person: {}
  },
  methods: {
   handleSubmit() {
      fetch('api/persons/edit.php', { //5
        method:'POST',
        body: JSON.stringify(this.person) ,//3
        headers: {
          "Content-Type": "application/json; charset=utf-8"
        }
      })
      .then( response => response.json() )
      .then( json => { editPersonApp.person = json}) //1&2
      .catch( err => {
        console.error('RECORD POST ERROR:');
        console.error(err);
     });

      this.handleReset();
    },
    handleReset() {
      this.person = { //3 and 6-attribute list
        firstName: '',
        lastName: '',
        radioNumber: '',
        stationNumber: '',
        isActive: '',
        streetAddress: '',
        workPhone: '',
        mobilePhone: '',
        positionId: '',
        birthDate: '',
        sex: ''
      }
    },
  }, // end methods
  created() {
    this.handleReset();
  }
});
