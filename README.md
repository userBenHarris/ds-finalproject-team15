# ds-finalproject-team15
This is the Github repo for Team 15's final project for Data &amp; Systems as a part of the MSIS core, relating to the OCFR case

Case Information:

Background Narrative 
Oconee County Fire Rescue (OCFR) is a mostly volunteer organization in Oconee County, GA. Its ﬁre ﬁghters and rescue personnel have to maintain multiple certiﬁcations, many of which expire. The department would like an online system that tracks its members, their contact information, and the certiﬁcation status of each of its current and former members. Your contact at OCFR, Felicia Smoake, has engaged your consultancy for a custom software development project. Tracking the certiﬁcations and certiﬁcation status of each of the volunteers is nearly a full-time job,  and has taken over her other responsibilities. Ms. Smoake believes a custom application will help out the department. Because the county’s IT personnel and resources are limited, it is unlikely the county will be willing to maintain a server and network infrastructure to host any application you build. Thus, cloud deployment is your best option. OCFR would like the option of eventually open-sourcing the project to help similar ﬁre departments, so in addition to a working/deployed application, you should provide clean code in a common version control system. After several meetings, you have come to understand the scope of the project as described below. In its initial stage, OCFR has agreed this is a proof-of-concept (POC), not a fully securityhardened deployable application. 

Required Use Cases 
Data Entry. 
A user can view a list of members, including basic information such as radio number and station. A user can view a list of certiﬁcations, including title and standard expiration period. Members may earn certiﬁcations with a speciﬁc expiration date. A user may add, edit, or delete member records, certiﬁcations, and other entities required for the application to function. At a minimum, when a member or certiﬁcation record is displayed, provide buttons to delete or update that record. 
Detail view with related list.
A user may view a certiﬁcation detail, which also shows all members with that certiﬁcation, current and expired. A user may view a member record detail, which also shows all certiﬁcations for that member, current and expired. 
Reports.
Several reports are available to the user, including: 
• A report that lists people with expired certiﬁcations (which may be ﬁltered by certiﬁcation), 
• A report that lists members’ names by station and radio number, and shows email addresses. 
Include other reports as appropriate. 

Optional Use Cases Implementing these use cases is completely optional, but if one is implemented, it must be implemented properly.
Login. A valid user can log in using an email and password. A logged in user can view and update all data, and view reports. A user not logged in sees only a login form. Implementing user authentication/login is not required. If you do implement a log in form, it must work properly AND any API calls need to respect the authentication status. We will not fully discuss state management (e.g., cookies) in class. 
Report formats. Allow the option to export reports as CSV ﬁles 
Data validation & error handling. Validate your data inputs on both the client and server. (For example, ﬁrst name and last name might be required ﬁelds.) Handle API error codes client-side when server-side validation fails. This may be partially implemented. Even client-side only validation is better than nothing, even though server-side validation is critical. 

Required Components: 
Your project must include the following required components: 
• Database: Use a cloud database to store relevant data. (e.g., MySQL) Make sure that your database is robust and follows the database design lessons you have learned during your MSIS courses. Data attributes that must be included in the database are listed on the last page of this document. Be sure to apply good database design techniques to create an appropriate data model for this data. 
• HTML & CSS: Style and design your pages professionally. 
• APIs: Build APIs and use them (e.g., via VueJS). 
• Apply the principle “separation of concerns” to your ﬁle structure. 
• Cloud. Deploy your ﬁnished application to the cloud. 

General Requirements 
• Use standard programming conventions, as discussed in class. 
• Separate your concerns. (Do not put “view” methods in your “models”, for example.) 
• All page views should have a consistent and pleasing look and feel. Use a common CSS ﬁle to style the pages. (Bootstrap is optional.)
• The application should have no errors debugged. 
• The work submitted should be entirely from the efforts of team members. You must actively document any outside help. 

Teams 
Your team should ﬁt the following class description: 
• getAlong() – Your team should implement this method by default. If an error occurs you should throw a notifyProfessor exception ASAP. 
• numMembersCoding – This value should equal numTeamMembers. While this would be difﬁcult to check during the professor’s test/deployment phase, it is in each team member’s interest to be familiar with all aspects of this projects so that they can avoid the dreaded failFinal exception. 

Deliverables
Your deliverables and due dates follow:
• Deliverable 1 —  Data model. Prepare an ER diagram or similar data model in a style that will be useful for you as you build this project. 
• Deliverable 2 —  Design documents and dummy data. Submit design diagrams for your project as a single ZIP ﬁle to Canvas. These should include at least a data model implemented in SQL, a site map diagram showing the pages that a user will see as they move through the site, and a non-functional mock-up of Web pages and navigation. A class diagram or list of expected ﬁles and their purpose are optional. 
• It is in your best interest to turn this in early and move to Deliverable #3 as soon as you can. 
• Deliverable 3 — HTML front-end. Commit HTML ﬁles that represent the client’s view of your application. These ﬁles do not have to be connected to an API. 
• Deliverable 4 — Single working entity. Commit code that completes the client’s view of your application, as connected to a cloud database via an API you built. 
• Deliverable 5a – Complete application. Record your team presenting a complete working demo of this application (e.g., via Zoom), as if presenting to a client. Demo all functionality. This should be ~10–15 minutes. 
• Deliverable 5b – Team review. Record your team presenting a retrospective of the project. Describe your design process and distribution of effort. Share lessons learned. Your audience is your instructor. This should be ~10–15 minutes. Good luck and have fun! 

Entities 
Build a web application with a database that includes at least the following entities. You may add other entities and relations as you see ﬁt, but the following are minimally required. As described above, your web application shall permit a user to view, create, edit, and delete the following entities. The included class diagrams are a guide. You will need to ﬂesh them out further as you develop your project. People Each member of the department should have his/her identifying information stored, including address, email, phone number(s), date of birth, start date, gender, and position within the department (e.g., Captain, Battalion Chief). Each member may be active or inactive in the department. Each active member shall have a radio number.

Person
firstName : String 
lastName : String 
radioNumber : String
stationNumber: integer
isActive : bool … // and other attributes as described/needed

Certiﬁcations 
Each certiﬁcation has a certifying agency (e.g., Red Cross), a certiﬁcation name (e.g. Emergency Medical Responder), and a default expiration period (in years).
Certiﬁcaton ? // attributes as described/needed

Users (optional) 
If you implement authentication, provide separate logins and passwords for each user, and encrypt or use a one-way hash for passwords. All users have the same administrative privileges. Users should be able to change their passwords and email addresses. Although not required, you may choose to include a password recovery process, whereby a temporary password is sent to a user’s email address.
User email : String 
password : String

Sample Data 
Sample people: 
Kathryn Pryde (Chief) 
Female
1123 Xavier School Drive Watkinsville, GA 30677
Work Phone: 707-555-1234 
Mobile Phone: 707-555-2345 
Radio#: A-1 
Station: (all) 
Certiﬁcations: Fireﬁghter II (renewed Aug/2018, exp Aug/2020); CPR (renewed Jul 2017, exp Jul/2019), HAZMAT (exp Feb/2020), Extrication (no expiry) Piotr Rasputin Male A31 Mother Russia Road Seattle, WA 98133 Mobile Phone: 206-555-9876 Radio#: 841 Station#: 8 Certiﬁcations: EMT-Adv (exp Sep/2020); CPR (renewed Jul/2019, exp Jul/2021), Due Regard (renewed Oct/2019, exp Oct/2021)

Warren Worthington III 
Male 
1140 Experiment Station Rd Watkinsville, GA
Work Phone: (706) 555-3945
Radio#: 122 
Station#: 1 
Certiﬁcations: Paramedic (exp Sep/2019); CPR (exp Jul/2020), Due Regard (exp Oct/2019), Fireﬁghter I (exp Aug 2020)

Sample Certiﬁcations: 
CPR (CPR for Healthcare Providers/American Heart Association), standard expiry: 2 years 
CPR (CPR for the Professional Rescuer/American Red Cross), standard expiry: 2 years 
Fireﬁghter I (Athens Technical College), standard expiry: 3 years 
Fireﬁghter I (Ivy Technical College), standard expiry: 3 years 
POST (Georgia POST Academy), standard expiry 5 years
