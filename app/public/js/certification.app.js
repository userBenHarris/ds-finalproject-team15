var certificationRecordsApp = new Vue({ //1-var
  el: '#certificationRecordsApp',   //1-html element id
  data: {
    certifications: [],   //2-array of certification records
    recordCertification: {}, //3
    filter: {
      sab: ''
    }
  },
  methods: {
    fetchCertifications() { //4- function to fetch certifications
      fetch('api/certifications/') //5-Folder in api
      .then(response => response.json())
      .then(json => { certificationRecordsApp.certifications = json }) //1 and 2
    },
    handleSubmit(event) {
      fetch('api/certifications/post.php', { //5
        method:'POST',
        body: JSON.stringify(this.recordCertification) ,//3
        headers: {
          "Content-Type": "application/json; charset=utf-8"
        }
      })
      .then( response => response.json() )
      .then( json => { certificationRecordsApp.certifications.push( json[0] ) }) //1&2
      .catch( err => {
        console.error('RECORD POST ERROR:');
        console.error(err);
     });

      this.handleReset();
    },
    handleReset() {
      this.recordCertification = { //3 and 6-attribute list
        certName:'',
        certOrg:'',
        expTime:''
      }
    },
    handleRowClick(certification) {      //??????
    certificationRecordsApp.certification = certification; //????
    }
  }, // end methods
  created() {
    this.handleReset();
    this.fetchCertifications();
  }
});
