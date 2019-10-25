var personRecordsApp = new Vue({ //1-var
  el: '#personRecordsApp',   //1-html element id
  data: {
    persons: [],   //2-array of person records
    recordPerson: {}, //3
    filter: {
      sab: ''
    }
  },
  methods: {
    fetchPersons() { //4- function to fetch persons
      fetch('api/persons/') //5-Folder in api
      .then(response => response.json())
      .then(json => { personRecordsApp.persons = json }) //1 and 2
    },
    handleSubmit(event) {
      fetch('api/persons/post.php', { //5
        method:'POST',
        body: JSON.stringify(this.recordPerson) ,//3
        headers: {
          "Content-Type": "application/json; charset=utf-8"
        }
      })
      .then( response => response.json() )
      .then( json => { personRecordsApp.persons.push( json[0] ) }) //1&2
      .catch( err => {
        console.error('RECORD POST ERROR:');
        console.error(err);
     });

      this.handleReset();
    },
    handleEditSubmit(event) {
      fetch('api/persons/edit.php', { //5
        method:'POST',
        body: JSON.stringify(this.recordPerson) ,//3
        headers: {
          "Content-Type": "application/json; charset=utf-8"
        }
      })
      .then( response => response.json() )
      .then( json => { personRecordsApp.persons.push( json[0] ) }) //1&2
      .catch( err => {
        console.error('RECORD POST ERROR:');
        console.error(err);
     });

      this.handleReset();
    },
    
    handleReset() {
      this.recordPerson = { //3 and 6-attribute list
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
    handleRowClick(person) {      //??????
    personRecordsApp.recordPerson = person; //????
  }
  }, // end methods
  created() {
    this.handleReset();
    this.fetchPersons();
  }
});
