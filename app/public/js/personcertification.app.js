var personCertificationsApp = new Vue({ //1-var
  el: '#personCertificationsApp',   //1-html element id
  data: {
    personCertifications: [],   //2-array of certification records
    personCertification: {}, //3
    certifications:[],
    filter:{
      personId: '',
      certId: ''
    }
  },
  methods: {
    fetchPersonCertifications() { //4- function to fetch certifications
      fetch('api/personcertifications/') //5-Folder in api
      .then(response => response.json())
      .then(json => { personCertificationsApp.personCertifications = json })
      .catch( err => {
        console.error('RECORD FETCH ERROR:');
        console.error(err);
     }); //1 and 2
    },
    fetchCertifications() { //4- function to fetch certifications
      fetch('api/certifications/') //5-Folder in api
      .then(response => response.json())
      .then(json => { personCertificationsApp.certifications = json }) //1 and 2
    },

getDate() {
if(moment(this.personCertification.certDate).isAfter())
return 0;
else
  return 1;
},
csvExport(arrData) {
      let csvContent = "data:text/csv;charset=utf-8,";
      csvContent += [
        Object.keys(arrData[0]).join(";"),
        ...arrData.map(item => Object.values(item).join(";"))
      ]
        .join("\n")
        .replace(/(^\[)|(\]$)/gm, "");

      const data = encodeURI(csvContent);
      const link = document.createElement("a");
      link.setAttribute("href", data);
      link.setAttribute("download", "export.csv");
      link.click();
  },

    handleSubmit(event) {
      this.personCertification.personId=personRecordsApp.selectedPerson.personId;
      this.personCertification.certId=certificationRecordsApp.selectedCertification.certId;
      fetch('api/personcertifications/post.php', { //5
        method:'POST',
        body: JSON.stringify(this.personCertification) ,//3
        headers: {
          "Content-Type": "application/json; charset=utf-8"
        }
      })
      .then( response => response.json() )
      .then( json => { personCertificationsApp.personCertifications.push( json ) }) //1&2
      .catch( err => {
        console.error('RECORD POST ERROR:');
        console.error(err);
     });

      this.handleReset();
    },
    handleReset() {
      this.personCertification = { //3 and 6-attribute list
        certId:'',
        personId:'',
        certDate:''
      }
    }
  },



     // end methods
  created() {
    this.handleReset();
    this.fetchPersonCertifications();
    this.fetchCertifications();
  }
});
