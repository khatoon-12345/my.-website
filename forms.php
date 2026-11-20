<div class="col-xl-4">

    <form method="post" id="form_submit">
        @csrf

        <div class="card">

            <div class="card-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5>Add Department</h5>
                    </div>
                </div>
            </div>

            <div class="card-body">

                <div class="row">

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label required" for="department_name">
                                Department Name
                            </label>
                            <input
                                type="text"
                                id="department_name"
                                name="department_name"
                                class="form-control text-capitalize"
                                placeholder="Enter Department Name"
                                autofocus>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="department_code">
                                Department Code
                            </label>
                            <input
                                type="text"
                                id="department_code"
                                name="department_code"
                                class="form-control text-capitalize"
                                placeholder="Enter Department Code">
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label required" for="location_id">
                                Location
                            </label>
                            <select
                                name="location_id"
                                id="location_id"
                                class="form-select select2">
                                <option value="">Select Location</option>
                                @foreach($locations as $location)
                                    <option value="{{ $location->id }}">
                                        {{ $location->location_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="department_head">
                                Department Head
                            </label>
                            <select
                                name="department_head_id "
                                id="department_head_id "
                                class="form-select select2">
                                <option value="">Select Department Head</option>
                                @foreach($employees as $location)
                                    <option value="{{ $location->id }}">
                                        {{ $location->location_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="email">
                                Email
                            </label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                class="form-control"
                                placeholder="Enter E-mail">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="phone">
                                Phone
                            </label>
                            <input
                                type="text"
                                id="phone"
                                name="phone"
                                class="form-control"
                                placeholder="Enter Phone Number">
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label class="form-label" for="description">
                                Description
                            </label>
                            <textarea
                                id="description"
                                name="description"
                                class="form-control"
                                placeholder="Enter Description"
                                rows="4"></textarea>
                        </div>
                    </div>

                </div>


                    <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="status">
                                Status
                            </label>

                            <select
                                name="status"
                                id="status_dep"
                                class="form-select">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                    </div>


            <!--5. Visitor Type Form-->

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label required" for="visitor_type_name">
                                Visitor Type Name
                            </label>
                            <input
                                type="text"
                                id="visitor_type_name"
                                name="visitor_type_name"
                                class="form-control text-capitalize"
                                placeholder="Enter Visitor Type Name"
                                required>
                        </div>
                    </div>
                </div>


                 <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="Code">
                             Code
                            </label>
                            <input
                                type="text"
                                id="Code"
                                name="Code"
                                class="form-control text-capitalize"
                                placeholder="Enter Code">
                        </div>
                    </div>

                    <!-- Description Textarea-->

                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="description">
                                Description
                            </label>
                            <textarea
                                id="description"
                                name="description"
                                class="form-control"
                                placeholder="Enter Description"
                                rows="4"></textarea>
                        </div>
                    </div>

                </div>
                        <!-- Approval Required  Toggle-->

                <div class="row">
                <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="Approval_Required">
                                Approval Required
                            </label>
                            <div class="form-check form-switch">
                                <input
                                class="form-check-input"
                                type="checkbox"
                                id="Approval_Required"
                                name="Approval_Required"
                                value="1">
                        </div>
                    </div>
                </div>
                
            
             <!-- ID Proof Required Toggle-->

                 <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="ID_Proof_Required">ID Proof Required
                            </label>
                            <div class="form-check form-switch">
                                <input
                                class="form-check-input"
                                type="checkbox"
                                id="ID_Proof_Required"
                                name="ID_Proof_Required"
                                value="1">
                        </div>
                    </div>

                </div>
            </div>


             <!-- Photo Required Toggle-->


            <div class="row">
                <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="Photo_Required">
                                Photo Required
                            </label>
                            <div class="form-check form-switch">
                                <input
                                class="form-check-input"
                                type="checkbox"
                                id="Photo_Required"
                                name="Photo_Required"
                                value="1">
                        </div>
                    </div>
                </div>
    
             <!-- Signature Required Toggle-->

             <div class="col-lg-6">
                 <div class="mb-3">
                    <label class="form-label" for="Signature_Required">Signature Required
                    </label>
                            <div class="form-check form-switch">
                                <input
                                class="form-check-input"
                                type="checkbox"
                                id="Signature_Required"
                                name="Signature_Required"
                                value="1">
                        </div>
                    </div>
                </div>
            </div>


             <!-- Badge Required Toggle-->

            <div class="row">
                <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="Badge_Required">Badge Required
                            </label>
                            <div class="form-check form-switch">
                                <input
                                class="form-check-input"
                                type="checkbox"
                                id="Badge_Required"
                                name="Badge_Required"
                                value="1">
                        </div>
                    </div>
                </div>
    
             <!-- Vehicle Details Required Toggle-->

             <div class="col-lg-6">
                 <div class="mb-3">
                    <label class="form-label" for="Vehicle_Details_Required">Vehicle Details Required
                    </label>
                            <div class="form-check form-switch">
                                <input
                                class="form-check-input"
                                type="checkbox"
                                id="Vehicle_Details_Required"
                                name="Vehicle_Details_Required"
                                value="1">
                        </div>
                    </div>
                </div>
            </div>


                      <!--Status Active/Inactive-->

                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="status">
                                Status
                            </label>

                            <select
                                name="status"
                                id="status_dep"
                                class="form-select">
                                <option value="Active">Active</option>
                                <option value="Inactive">Inactive</option>
                            </select>
                        </div>
                    </div>


             <!--6. Visitor Registration Form-->

             <div class="col-lg-6">
                 <div class="mb-3">
                     <label class="form-label required" for="First_Name">
                         First Name
                        </label>

                            <input 
                                type="text"
                                name="First_Name"
                                id="First_Name"
                                class="form-control"
                                placeholder="Enter First Name"
                                required>

                        </div>
                    </div>
                

                <div class="row">
                <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="Last_Name">
                                Last Name
                            </label>

                            <input 
                                type="text"
                                name="Last_Name"
                                id="Last_Name"
                                class="form-control"
                                placeholder="Enter Last Name">
                                
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label" for="Profile_Photo">
                                Profile Photo
                            </label>

                            <input 
                                type="file"
                                name="image"
                                id="image"
                                class="form-control">
                                
                        </div>
                    </div>
                    </div>


                <div class="row">
                <div class="col-lg-6">
                <div class="mb-3">
                 <label class="form-label required" for="Mobile_Number">
                     Mobile Number
                </label>
                            <input 
                                type="Number"
                                name="Mobile_Number"
                                id="Mobile_Number"
                                class="form-control"
                                placeholder="Enter Mobile Number"> 
                          </div>
                        </div>

                        <div class="col-lg-6">
                        <div class="mb-3">
                     <label class="form-label " for="Company_Organization">
                         Company / Organization
                     </label>
                          <input 
                            type="text"
                            name="Company_Organization"
                            id="Company_Organization"
                            class="form-control"
                            placeholder="Enter Company Organaization">
                            
                        </div>
                    </div>
                </div>


                <div class="row">
                <div class="col-lg-6">
                <div class="mb-3">
                 <label class="form-label required" for="Visitor_Type">
                      Visitor Type
                </label>
                            <select 

                                name="Visitor_Type"
                                id="Visitor_Type"
                                class="form-select"
                                required> 

                                <option value="">Select Visitor Type</option>
                                <option value="Guest">Guest</option>
                                <option value="Vendor">Vendor</option>
                                <option value="Employee">Employee</option>
                                <option value="Other">Other</option>
                                
                            </select> 
                          </div>
                        </div>

                 <div class="col-lg-6">
                     <div class="mb-3">
                        <label class="form-label" for="Gender">
                            Gender
                        </label>
                            <select 
                                name="Gender"
                                id="Gender"
                                class="form-select"
                                required> 

                                <option value="">Select Gender</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                                <option value="Other">Other</option>
                                
                                </select> 
                          </div>
                     </div>
                </div>

                <div class="row">
                <div class="col-lg-6">
                <div class="mb-3">
                 <label class="form-label" for="Date_of_Birth">
                    Date of Birth
                </label>
                            <input 
                                type="Date"
                                name="Date_of_Birth"
                                id="Date_of_Birth"
                                class="form-control"> 
                          </div>
                        </div>
                    

                     <div class="col-lg-6">
                     <div class="mb-3">
                        <label class="form-label" for="Nationality">
                            Nationality
                        </label>
                            <select 
                                name="Nationality"
                                id="Nationality"
                                class="form-select"> 

                                <option value="">Select Nationality</option>
                                <option value="Indian">Indian</option>
                                <option value="Other">Other</option>
                                
                                </select> 
                          </div>
                     </div>
                </div>


             <!--Visit Information-->
            
                <div class="row">
                <div class="col-lg-6">
                <div class="mb-3">
                 <label class="form-label required" for="Visit_Date">
                 Visit Date
                    </label>
                       
                        <input 
                        type="date"
                        name="Visit_Date"
                        id="Visit_Date"
                        class="form-control"
                        required> 
                    </div>
                </div>
            
            <div class="col-lg-6">
            <div class="mb-3">
            <label class="form-label required" for="Expected_Arrival_Time">
            Expected Arrival Time
                </label>

            <input
                type="time"
                name="Expected_Arrival_Time"
                id="Expected_Arrival_Time"
                class="form-control"
                required>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-6">
        <div class="mb-3">
             <label class="form-label required" for="expected_departure_time">
                    Expected Departure Time
                </label>
                       
                    <input 
                        type="time"
                        name="expected_departure_time"
                        id="expected_departure_time"
                        class="form-control"> 
                    </div>
                </div>


     <div class="col-lg-6">
        <div class="mb-3">
             <label class="form-label required" for="host_employee">
                    Host / Employee 
                    </label>
                       
                    <select 
                        name="host_employee"
                        id="host_employee"
                        class="form-select" required>

                        <option value="">Select Host /Employee</option>
                         <option value="Employee 1">Employee 1</option>
                        <option value="Employee 2">Employee 2</option>
                         <option value="Employee 3">Employee 3</option>
                        
                 </select> 
                </div>
             </div>
        </div>
            


    <div class="row">
     <div class="col-lg-6">
     <div class="mb-3">
     <label class="form-label" for="Department">
        Department
    </label>

        <select 
            
            name="Department"
            id="Department"
            class="form-select"> 

            <option value="">Select Department</option>
            <option value="HR">HR</option>
            <option value="IT">IT</option>
            <option value="Finance">Finance</option>
            <option value="Admin">Admin</option>

        </select>
        </div>
    </div>


    <div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Purpose_of_Visit">
            Purpose of Visit
        </label>

        <select
            name="Purpose_of_Visit"
            id="Purpose_of_Visit"
            class="form-select">

            <option value="">Select Purpose of Visit</option>
            <option value="Meeting">Meeting</option>
            <option value="Interview">Interview</option>
            <option value="Delivery">Delivery</option>
            <option value="Business">Business</option>
            <option value="Personal">Personal</option>
            <option value="Official Work">Official Work</option>
            <option value="Other">Other</option>

        </select>
    </div>
</div>
</div>

<div class="row">

    <div class="col-lg-12">
        <div class="mb-3">
            <label class="form-label" for="visit_description">
                Visit Description
            </label>
                <textarea
                    id="visit_description"
                    name="visit_description"
                    class="form-control"
                    placeholder="Type Visit Description"
                    rows="4"></textarea>
            </div>
        </div>

    </div>



   <div class="row">
    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="number_of_visitors">
                Number of Visitors
            </label>

            <input
                type="number"
                id="number_of_visitors"
                name="number_of_visitors"
                class="form-control"
                placeholder="Enter Number of Visitors">
        </div>
    </div>


 <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="Meeting_Room">
                Meeting Room
            </label>

            <select
                id="Meeting_Room"
                name="Meeting_Room"
                class="form-select">

                <option value="">Select Meeting Room</option>
            <option value="Meeting Room 1">Meeting Room 1</option>
            <option value="Meeting Room 2">Meeting Room 2</option>
            <option value="Meeting Room 3">Meeting Room 3</option>

             </select>
        </div>
    </div>
</div>
            
        <!-- # 7. Visitor ID Proof -->     

 <div class="row">
    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="location">
                Location
            </label>

            <select
                id="location"
                name="location"
                class="form-control">

              <option value="">Select Location</option>
            <option value="Reception">Reception</option>
            <option value="Office">Office</option>
            <option value="Lobby">Lobby</option>
            <option value="Meeting Room">Meeting Room</option>
            <option value="Other">Other</option>

             </select>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="ID_Number">
                ID Number
            </label>

            <input
                type="text"
                id="id_number"
                name="id_number"
                class="form-control">
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="id_document_front">
                ID Document Front
            </label>

            <input
                type="file"
                id="id_document_front"
                name="id_document_front"
                class="form-control">

        </div>
    </div>

    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="id_document_back">
                ID Document Back
            </label>

            <input
                type="file"
                id="id_document_back"
                name="id_document_back"
                class="form-control">
                
        </div>
    </div>
</div>



<div class="row">
    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="id_expiry_date">
            ID Expiry Date
                </label>

            <input
                type="date"
                id="id_expiry_date"
                name="id_expiry_date"
                class="form-control">

        </div>
    </div>


 <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="verification_status">
                Verification Status
            </label>

            <select
                type="date"
                id="verification_status"
                name="verification_status"
                class="form-select">

                <option value="">Select Verification Status</option>
                <option value="Pending">Pending</option>
                <option value="Verified">Verified</option>
                <option value="Rejected">Rejected</option>

            </select>
        </div>
    </div>
</div>


<div class="row">
 <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="verified_by">
                Verified By
            </label>

            <select
        
                id="verified_by"
                name="verified_by"
                class="form-select">

                <option value="">Select Employee</option>
            <option value="Employee 1">Employee 1</option>
            <option value="Employee 2">Employee 2</option>
            <option value="Employee 3">Employee 3</option>

            </select>
        </div>
    </div>

 <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="Verification_Date">
                Verification Date
            </label>

            <input
                type="datetime-local"
                id="Verification_Date"
                name="Verification_Date"
                class="form-control">

        </div>
    </div>
</div>



          <!--8. Vehicle Details -->



<div class="row">
 <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="Vehicle_Required">
                Vehicle Required
            </label>

            <select
        
                id="Vehicle_Required"
                name="Vehicle_Required"
                class="form-select">

                <option value="">Select Vehicle</option>
                <option value=" Yes">Yes</option>
                <option value="No">No</option>

            </select>
        </div>
    </div>


 <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="Vehicle_Type">
                Vehicle Type
            </label>

            <select
                
                id="Vehicle_Type"
                name="Vehicle_Type"
                class="form-select">

                <option value="">Select Vehicle Type</option>
                <option value="Car">Car</option>
                <option value="Bike">Bike</option>
                <option value="Auto">Auto</option>
                <option value="Bus">Bus</option>
                <option value="Other">Other</option>

            </select>
        
        </div>
    </div>



<div class="row">
    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="Vehicle_Number">
                Vehicle Number
            </label>

            <input
                type="text"
                id="Vehicle_Number"
                name="Vehicle_Number"
                class="form-control"
                placeholder="Enter Vehicle Number">
        </div>
    </div>


<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Vehicle_Make">
            Vehicle Make
        </label>

        <input
            type="text"
            id="Vehicle_Make"
            name="Vehicle_Make"
            class="form-control"
            placeholder="Enter Vehicle Make">
    </div>
</div>
</div>



<div class="row">
    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="Vehicle_Model">
                Vehicle Model
            </label>

            <input
                type="text"
                id="Vehicle_Model"
                name="Vehicle_Model"
                class="form-control"
                placeholder="Enter Vehicle Model">
        </div>
    </div>


<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Vehicle_Color">
            Vehicle Color
        </label>

        <input
            type="text"
            id="Vehicle_Color"
            name="Vehicle_Color"
            class="form-control"
            placeholder="Enter Vehicle Color">
    </div>
</div>
</div>



<div class="row">
    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="Parking_Required">
                Parking Required
            </label>

            <select
            
                id="Parking_Required"
                name="Parking_Required"
                class="form-select">

             <option value="">Select Parking Required</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
        </select>

                
        </div>
    </div>


<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Parking_Slot">
            Parking Slot
        </label>

        <select
           
            id="Vehicle_Slot"
            name="Vehicle_Slot"
            class="form-select">
            <option value="">Parking Slot</option>
           <option value="P-01">P-01</option>
            <option value="P-02">P-02</option>
            <option value="P-03">P-03</option>
            <option value="P-04">P-04</option>
            <option value="P-05">P-05</option>
        </select>
    </div>
</div>
</div>



<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Vehicle_Pass_Number">
            Vehicle Pass Number
        </label>

        <input
            type="text"
            id="Vehicle_Pass_Number"
            name="Vehicle_Pass_Number"
            class="form-control"
            placeholder="Enter Vehicle Pass Number">
           
    </div>
</div>

        
        <!--9. Visitor Address-->

<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Address_Line_1">
            Address Line 1
        </label>

        <textarea
            id="Address_Line_1"
            name="Address_Line_1"
            class="form-control"
            placeholder="Enter Address Line 1"
            rows="3"></textarea>
    </div>
</div>
</div>


<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Address_Line_2">
            Address Line 2
        </label>

        <textarea
            id="Address_Line_2"
            name="Address_Line_2"
            class="form-control"
            placeholder="Enter Address Line 2"
            rows="3"></textarea>
    </div>
</div>


<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Country">
            Country
        </label>

        <select
            id="Country"
            name="Country"
            class="form-select">

            <option value="">Select Country</option>
            <option value="India">India</option>
            <option value="USA">USA</option>
            <option value="UK">UK</option>
            <option value="Canada">Canada</option>
            <option value="Australia">Australia</option>
            <option value="Other">Other</option>
        </select>
    </div>
</div>
</div>


<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="State">
            State
        </label>

        <select
            id="State"
            name="State"
            class="form-select">

            <option value="">Select State</option>
            <option value="Jharkhand">Jharkhand</option>
            <option value="Maharashtra">Maharashtra</option>
            <option value="Uttar Pradesh">Uttar Pradesh</option>
            <option value="West Bengal">West Bengal</option>
            <option value="Other">Other</option>

        </select>
    </div>
</div>

<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="City">
            City
        </label>

        <select
            id="City"
            name="City"
            class="form-select">

            <option value="">Select City</option>
            <option value="Delhi">Delhi</option>
            <option value="Gurugram">Gurugram</option>
            <option value="Noida">Noida</option>
            <option value="Mumbai">Mumbai</option>
            <option value="Kolkata">Kolkata</option>
            <option value="Bengaluru">Bengaluru</option>
            <option value="Chennai">Chennai</option>
            <option value="Hyderabad">Hyderabad</option>
            <option value="Pune">Pune</option>
            <option value="Jaipur">Jaipur</option>
            <option value="Other">Other</option>

        </select>
    </div>
</div>
</div>



<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Pin_Code">
            PIN Code
        </label>

        <input
            type="text"
            id="Pin_Code"
            name="Pin_Code"
            class="form-control"
            placeholder="Enter PIN Code">
    </div>
</div>



<!--10. Pre-Registration / Invitation Form-->



<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label required" for="Visitor_Name">
            Visitor Name
        </label>

        <input
            type="text"
            id="Visitor_Name"
            name="Visitor_Name"
            class="form-control"
            placeholder="Enter Visitor Name"
            required>
    </div>
</div>
</div>


<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label required" for="Mobile_Number">
            Mobile Number
        </label>

        <input
            type="tel"
            id="Mobile_Number"
            name="Mobile_Number"
            class="form-control"
            placeholder="Enter Mobile Number"
            maxlength="10"
            required>
    </div>
</div>


<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Email">
            Email
        </label>

        <input
            type="email"
            id="Email"
            name="Email"
            class="form-control"
            placeholder="Enter Email">
    </div>
</div>
</div>


<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Company">
            Company
        </label>

        <input
            type="text"
            id="Company"
            name="Company"
            class="form-control"
            placeholder="Enter Company Name">
    </div>
</div>


<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label required" for="Visitor_Type">
            Visitor Type
        </label>

        <select
            id="Visitor_Type"
            name="Visitor_Type"
            class="form-select"
            required>

            <option value="">Select Visitor Type</option>
            <option value="Guest">Guest</option>
            <option value="Vendor">Vendor</option>
            <option value="Client">Client</option>
            <option value="Interview">Interview</option>
            <option value="Other">Other</option>

        </select>
    </div>
</div>
</div>


<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label required" for="Host">
            Host
        </label>

        <select
            id="Host"
            name="Host"
            class="form-select"
            required>

            <option value="">Select Host</option>
            <option value="Employee 1">Employee 1</option>
            <option value="Employee 2">Employee 2</option>
            <option value="Employee 3">Employee 3</option>
            <option value="Other">Other</option>

        </select>
    </div>
</div>


<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label required" for="Location">
            Location
        </label>

        <select
            id="Location"
            name="Location"
            class="form-select"
            required>

            <option value="">Select Location</option>
            <option value="Reception">Reception</option>
            <option value="Office">Office</option>
            <option value="Lobby">Lobby</option>
            <option value="Meeting Room">Meeting Room</option>
            <option value="Other">Other</option>

        </select>
    </div>
</div>
</div>



<div class="row">
    <div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Department">
            Department
        </label>

        <select
            id="Department"
            name="Department"
            class="form-select">

            <option value="">Select Department</option>
            <option value="HR">HR</option>
            <option value="IT">IT</option>
            <option value="Finance">Finance</option>
            <option value="Admin">Admin</option>
            <option value="Sales">Sales</option>
            <option value="Marketing">Marketing</option>
            <option value="Operations">Operations</option>
            <option value="Other">Other</option>

        </select>
    </div>
</div>


<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label required" for="Visit_Date">
            Visit Date
        </label>

        <input
            type="date"
            id="Visit_Date"
            name="Visit_Date"
            class="form-control">
    </div>
</div>
</div>

<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label required" for="Arrival_Time">
            Arrival Time
        </label>

        <input
            type="time"
            id="Arrival_Time"
            name="Arrival_Time"
            class="form-control">
    </div>
</div>


<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Expected_Duration">
            Expected Duration
        </label>

        <input
            type="number"
            id="Expected_Duration"
            name="Expected_Duration"
            class="form-control"
            placeholder="Enter Expected Duration">
    </div>
</div>

</div>


<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label required" for="Purpose">
            Purpose
        </label>

        <select
            id="Purpose"
            name="Purpose"
            class="form-select"
            required>

            <option value="">Select Purpose</option>
            <option value="Meeting">Meeting</option>
            <option value="Interview">Interview</option>
            <option value="Delivery">Delivery</option>
            <option value="Business">Business</option>
            <option value="Personal">Personal</option>
            <option value="Official Work">Official Work</option>
            <option value="Other">Other</option>

        </select>
    </div>
</div>


<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Meeting_Room">
            Meeting Room
        </label>

        <select
            id="Meeting_Room"
            name="Meeting_Room"
            class="form-select">

            <option value="">Select Meeting Room</option>
            <option value="Meeting Room 1">Meeting Room 1</option>
            <option value="Meeting Room 2">Meeting Room 2</option>
            <option value="Meeting Room 3">Meeting Room 3</option>
            <option value="Conference Room">Conference Room</option>
            <option value="Other">Other</option>

        </select>
    </div>
</div>
</div>


<div class="row">
    <div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Additional_Instructions">
            Additional Instructions
        </label>

        <textarea
            id="Additional_Instructions"
            name="Additional_Instructions"
            class="form-control"
            placeholder="Enter Additional Instructions"
            rows="3"></textarea>
    </div>
</div>


<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Send_Invitation">
            Send Invitation
        </label>

        <div class="form-check">
        <input
             class="form-check-input"
             type="checkbox"
            id="Send_Invitation"
            name="Send_Invitation"
            value="1">

            <label class="form-check-label" for="Send_Invitation">
                Send Invitation
            </label>
           
    </div>
</div>
</div>



<div class="row">
    <div class="col-lg-6">
        <div class="mb-3">
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    id="Send_via_Email"
                    name="Send_via_Email"
                    value="1">

                <label class="form-check-label" for="Send_via_Email">
                    Send via Email
                </label>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="mb-3">
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    id="Send_via_SMS"
                    name="Send_via_SMS"
                    value="1">

                <label class="form-check-label" for="Send_via_SMS">
                    Send via SMS
                </label>
            </div>
        </div>
    </div>

</div>


<div class="row">
    <div class="col-lg-6">
        <div class="mb-3">
            <div class="form-check">
                <input
                    class="form-check-input"
                    type="checkbox"
                    id="Send_via_WhatsApp"
                    name="Send_via_WhatsApp"
                    value="1">

                <label class="form-check-label" for="Send_via_WhatsApp">
                    Send via WhatsApp
                </label>
            </div>
        </div>
    </div>



        <!--11. Walk-in Visitor Form-->


<!-- Visitor Details -->

    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label required" for="Visitor_Name">
                Visitor Name
            </label>

            <input
                type="text"
                id="Visitor_Name"
                name="Visitor_Name"
                class="form-control"
                placeholder="Enter Visitor Name"
                required>
        </div>
    </div>
</div>
</div>


    <div class="row">
    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label required" for="Mobile_Number">
                Mobile Number
            </label>

            <input
                type="tel"
                id="Mobile_Number"
                name="Mobile_Number"
                class="form-control"
                placeholder="Enter Mobile Number"
                maxlength="10"
                required>
        </div>
    </div>

    <!-- Company -->
    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="Company">
                Company
            </label>

            <input
                type="text"
                id="Company"
                name="Company"
                class="form-control"
                placeholder="Enter Company Name">
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label required" for="Visitor_Type">
                Visitor Type
            </label>

            <select
                id="Visitor_Type"
                name="Visitor_Type"
                class="form-select"
                required>

                <option value="">Select Visitor Type</option>
                <option value="Guest">Guest</option>
                <option value="Vendor">Vendor</option>
                <option value="Client">Client</option>
                <option value="Interview">Interview</option>
                <option value="Other">Other</option>

            </select>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="Photo">
                Photo
            </label>

            <input
                type="file"
                id="Photo"
                name="Photo"
                class="form-control"
                accept="image/*">
        </div>
    </div>
</div>


<!--Meeting Details-->
<div class="row">
    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label required" for="Whom_to_Meet">
                Whom to Meet
            </label>

            <select
                id="Whom_to_Meet"
                name="Whom_to_Meet"
                class="form-select"
                required>

                <option value="">Select Employee</option>
                <option value="Employee 1">Employee 1</option>
                <option value="Employee 2">Employee 2</option>
                <option value="Employee 3">Employee 3</option>

            </select>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="Department">
                Department
            </label>

            <select
                id="Department"
                name="Department"
                class="form-select">

                <option value="">Select Department</option>
                <option value="HR">HR</option>
                <option value="IT">IT</option>
                <option value="Finance">Finance</option>
                <option value="Admin">Admin</option>
                <option value="Sales">Sales</option>
                <option value="Marketing">Marketing</option>
                <option value="Operations">Operations</option>
                <option value="Other">Other</option>

            </select>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label required" for="Purpose">
                Purpose
            </label>

            <select
                id="Purpose"
                name="Purpose"
                class="form-select"
                required>

                <option value="">Select Purpose</option>
                <option value="Meeting">Meeting</option>
                <option value="Interview">Interview</option>
                <option value="Delivery">Delivery</option>
                <option value="Business">Business</option>
                <option value="Official Work">Official Work</option>
                <option value="Other">Other</option>

            </select>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="Location">
                Location
            </label>

            <select
                id="Location"
                name="Location"
                class="form-select">

                <option value="">Select Location</option>
                <option value="Reception">Reception</option>
                <option value="Office">Office</option>
                <option value="Lobby">Lobby</option>
                <option value="Meeting Room">Meeting Room</option>
                <option value="Other">Other</option>

            </select>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="Visit_Date">
                Visit Date
            </label>

            <input
                type="date"
                id="Visit_Date"
                name="Visit_Date"
                class="form-control">
        </div>
    </div>

    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="Expected_Duration">
                Expected Duration
            </label>

            <select
                id="Expected_Duration"
                name="Expected_Duration"
                class="form-select">

                <option value="">Select Duration</option>
                <option value="15 Minutes">15 Minutes</option>
                <option value="30 Minutes">30 Minutes</option>
                <option value="1 Hour">1 Hour</option>
                <option value="2 Hours">2 Hours</option>
                <option value="More than 2 Hours">More than 2 Hours</option>

            </select>
        </div>
    </div>
</div>



<!-- Verification -->
<div class="row">
    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="ID_Proof_Type">
                ID Proof Type
            </label>

            <select
                id="ID_Proof_Type"
                name="ID_Proof_Type"
                class="form-select">

                <option value="">Select ID Proof Type</option>
                <option value="Aadhaar Card">Aadhaar Card</option>
                <option value="PAN Card">PAN Card</option>
                <option value="Driving License">Driving License</option>
                <option value="Passport">Passport</option>
                <option value="Voter ID">Voter ID</option>
                <option value="Other">Other</option>

            </select>
        </div>
    </div>


    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="ID_Number">
                ID Number
            </label>

            <input
                type="text"
                id="ID_Number"
                name="ID_Number"
                class="form-control"
                placeholder="Enter ID Number">
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="ID_Document">
                ID Document
            </label>

            <input
                type="file"
                id="ID_Document"
                name="ID_Document"
                class="form-control"
                accept=".jpg,.jpeg,.png,.pdf">
        </div>
    </div>


<!-- Vehicle -->
    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="Vehicle_Number">
                Vehicle Number
            </label>

            <input
                type="text"
                id="Vehicle_Number"
                name="Vehicle_Number"
                class="form-control"
                placeholder="Enter Vehicle Number">
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="Vehicle_Type">
                Vehicle Type
            </label>

            <select
                id="Vehicle_Type"
                name="Vehicle_Type"
                class="form-select">

                <option value="">Select Vehicle Type</option>
                <option value="Car">Car</option>
                <option value="Bike">Bike</option>
                <option value="Auto">Auto</option>
                <option value="Bus">Bus</option>
                <option value="Other">Other</option>

            </select>
        </div>
    </div>



<!-- Buttons -->
<div class="col-lg-6">
<div class="mb-3">

<div class="d-flex justify-content-start gap-2 mt-4">

    <a href="index.php" class="btn btn-secondary">
        Cancel
    </a>

</div>
</div>
</div>
</div>

    <div class="row">
     <div class="col-lg-6">
     <div class="mb-3">
    <button type="submit" class="btn btn-primary">
        Register Visitor
    </button>

</div>
</div>


<!--12. Visitor Check-In Form-->
    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="QR_Code">
                QR Code
            </label>

            <input
                type="Scanner"
                id="QR_Code"
                name="QR_Code"
                class="form-control"
                placeholder="Enter QR Code">
        </div>
    </div>
</div>


<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Visitor">
            Visitor
        </label>

        <input
            type="text"
            id="Visitor"
            name="Visitor"
            class="form-control"
            value="Auto">
    </div>
</div>

<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Visit">
            Visit
        </label>

        <select
            id="Visit"
            name="Visit"
            class="form-select">

            <option value="">Select Visit</option>
            <option value="Scheduled Visit">Scheduled Visit</option>
            <option value="Walk-in">Walk-in</option>

        </select>
    </div>
</div>
</div>

<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Host">
            Host
        </label>

        <select
            id="Host"
            name="Host"
            class="form-select">

            <option value="">Select Host</option>
            <option value="Employee 1">Employee 1</option>
            <option value="Employee 2">Employee 2</option>
            <option value="Employee 3">Employee 3</option>
            <option value="Other">Other</option>

        </select>
    </div>
</div>


<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Location">
            Location
        </label>

        <select
            id="Location"
            name="Location"
            class="form-select">

            <option value="">Select Location</option>
            <option value="Reception">Reception</option>
            <option value="Office">Office</option>
            <option value="Lobby">Lobby</option>
            <option value="Meeting Room">Meeting Room</option>
            <option value="Other">Other</option>

            </select>
        </div>
    </div>
</div>


<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Checkin_Time">
            Check-in Time
        </label>

        <input
            type="time"
            id="Checkin_Time"
            name="Checkin_Time"
            class="form-control">
    </div>
</div>


 <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="Photo">
                Photo
            </label>
            <input
                type="file"
                id="Photo"
                name="Photo"
                class="form-control"
                accept="image/*"
                capture="camera">

          </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="ID_Varification">
                ID Verification
            </label>

           <input
        class="form-check-input"
        type="checkbox"
        id="ID_Verification"
        name="ID_Verification"
        value="1">
    </div>
</div>


<div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="Agreement_Accepted">
                Agreement Accepted
            </label>

           <input
        class="form-check-input"
        type="checkbox"
        id="Agreement_Accepted"
        name="Agreement_Accepted"
        value="1">
    </div>
</div>
</div>


<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Remarks">
            Remarks
        </label>

        <textarea
            id="Remarks"
            name="Remarks"
            class="form-control"
            placeholder="Enter Remarks"
            rows="3"></textarea>
    </div>
</div>

        <!-- Check In Button -->
<div class="col-lg-6">
    <div class="mb-3">
        <div class="d-flex justify-content-end mt-4">

         <button type="submit" class="btn btn-primary">
            CHECK IN
        </button>

        </div>
    </div>
</div>
</div>

<!-- 15. Badge Form Badge Number -->

<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label required" for="Badge_Number">
            Badge Number
        </label>

        <input
            type="text"
            id="Badge_Number"
            name="Badge_Number"
            class="form-control"
            placeholder="Enter Badge Number"
            required>
    </div>
</div>

<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label required" for="Badge_Template">
            Badge Template
        </label>

        <select
            id="Badge_Template"
            name="Badge_Template"
            class="form-select"
            required>

            <option value="">Select</option>
            <option value="Template 1">Template 1</option>
            <option value="Template 2">Template 2</option>
            <option value="Template 3">Template 3</option>

        </select>
    </div>
</div>
</div>


<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label " for="Visitor">
            Visitor
        </label>

        <select
            id="Visitor"
            name="Visitor"
            class="form-select">

            <option value="">Select Visitor</option>
            <option value="Visitor 1">Visitor 1</option>
            <option value="Visitor 2">Visitor 2</option>
            <option value="Visitor 3">Visitor 3</option>

        </select>
    </div>
</div>


<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Visit">
            Visit
        </label>

        <select
            id="Visit"
            name="Visit"
            class="form-select">

            <option value="">Select Visit</option>
            <option value="Visit 1">Visit 1</option>
            <option value="Visit 2">Visit 2</option>
            <option value="Visit 3">Visit 3</option>

        </select>
    </div>
</div>
</div>


<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Photo">
            Photo
        </label>

        <input
            type="file"
            id="Photo"
            name="Photo"
            class="form-control"
            accept="image/*">
    </div>
</div>

<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Host">
            Host
        </label>

        <input
            type="text"
            id="Host"
            name="Host"
            class="form-control"
            value="Auto">
    </div>
</div>
</div>


<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Location">
            Location
        </label>

        <input
            type="text"
            id="Location"
            name="Location"
            class="form-control"
            value="Auto">
    </div>
</div>

<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Valid_From">
            Valid From
        </label>

        <input
            type="datetime-local"
            id="Valid_From"
            name="Valid_From"
            class="form-control">
    </div>
</div>
</div>

<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Valid_Until">
            Valid Until
        </label>

        <input
            type="datetime-local"
            id="Valid_Until"
            name="Valid_Until"
            class="form-control">
    </div>
</div>


<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="QRCode">
            QR Code
        </label>

        <input
            type="text"
            id="QRCode"
            name="QRCode"
            class="form-control"
            value="Auto">
    </div>
</div>
</div>


<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Status">
            Status
        </label>

        <select
            id="Status"
            name="Status"
            class="form-select">

            <option value="Active">Active</option>
            <option value="Expired">Expired</option>
            <option value="Returned">Returned</option>

        </select>
    </div>
</div>

<!--16. Badge Template Form-->

<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Template_Name">
            Template Name <span class="text-danger">*</span>
        </label>

        <input
            type="text"
            id="Template_Name"
            name="Template_Name"
            class="form-control"
            placeholder="Enter template name"
            required>
    </div>
</div>


<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Badge_Size">
            Badge Size
        </label>

        <select
            id="Badge_Size"
            name="Badge_Size"
            class="form-select">

            <option value="">Select Badge Size</option>
            <option value="Small">Small</option>
            <option value="Medium">Medium</option>
            <option value="Large">Large</option>

        </select>
    </div>
</div>


<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Logo">
            Logo
        </label>

        <input
            type="file"
            id="Logo"
            name="Logo"
            class="form-control"
            accept="image/*">
    </div>
</div>
</div>


<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Visitor_Photo">
            Visitor Photo
        </label>

        <div class="form-check form-switch">
            <input
                class="form-check-input"
                type="checkbox"
                id="Visitor_Photo"
                name="Visitor_Photo"
                value="1">

            <label
                class="form-check-label"
                for="Visitor_Photo">
                Enable Visitor Photo
            </label>
        </div>
    </div>
</div>


    <div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Visitor_Name">
            Visitor Name
        </label>

        <div class="form-check form-switch">
            <input
                class="form-check-input"
                type="checkbox"
                id="Visitor_Name"
                name="Visitor_Name"
                value="1">

            <label
                class="form-check-label"
                for="Visitor_Name">
                Enable Visitor Name
            </label>
        </div>
    </div>
</div>
</div>


<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Company_Name">
            Company Name
        </label>

        <div class="form-check form-switch">
            <input
                class="form-check-input"
                type="checkbox"
                id="Company_Name"
                name="Company_Name"
                value="1">

            <label
                class="form-check-label"
                for="Company_Name">
                Enable Company Name
            </label>
        </div>
    </div>
</div>


<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Host_Name">
            Host Name
        </label>

        <div class="form-check form-switch">
            <input
                class="form-check-input"
                type="checkbox"
                id="Host_Name"
                name="Host_Name"
                value="1">

            <label
                class="form-check-label"
                for="Host_Name">
                Enable Host Name
            </label>
        </div>
    </div>
</div>
</div>


<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Visit_Date">
            Visit Date
        </label>

        <div class="form-check form-switch">
            <input
                class="form-check-input"
                type="checkbox"
                id="Visit_Date"
                name="Visit_Date"
                value="1">

            <label
                class="form-check-label"
                for="Visit_Date">
                Enable Visit Date
            </label>
        </div>
    </div>
</div>

<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="QR_Code">
            QR Code
        </label>

        <div class="form-check form-switch">
            <input
                class="form-check-input"
                type="checkbox"
                id="QR_Code"
                name="QR_Code"
                value="1">

            <label
                class="form-check-label"
                for="QR_Code">
                Enable QR Code
            </label>
        </div>
    </div>
</div>
</div>


<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Badge_Number">
            Badge Number
        </label>

        <div class="form-check form-switch">
            <input
                class="form-check-input"
                type="checkbox"
                id="Badge_Number"
                name="Badge_Number"
                value="1">

            <label
                class="form-check-label"
                for="Badge_Number">
                Enable Badge Number
            </label>
        </div>
    </div>
</div>


<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Expiry_Time">
            Expiry Time
        </label>

        <div class="form-check form-switch">
            <input
                class="form-check-input"
                type="checkbox"
                id="Expiry_Time"
                name="Expiry_Time"
                value="1">

            <label
                class="form-check-label"
                for="Expiry_Time">
                Enable Expiry Time
            </label>
        </div>
    </div>
</div>
</div>


<div class="row">
    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="Custom_Text">
                Custom Text
            </label>

            <input
                type="text"
                id="Custom_Text"
                name="Custom_Text"
                class="form-control"
                placeholder="Enter custom text">
        </div>
    </div>


    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="Status">
                Status
            </label>

            <select
                id="Status"
                name="Status"
                class="form-select">
                <option value="">Select Status</option>
                <option value="Active">Active</option>
                <option value="Inactive">Inactive</option>
            </select>
        </div>
    </div>
</div>

<!--17. Digital Agreement / NDA Form-->

<div class="row">
    <div class="col-lg-6">
        <div class="mb-3">
            <label class="form-label" for="Agreement_Name">
                Agreement Name <span class="text-danger">*</span>
            </label>

            <input
                type="text"
                id="Agreement_Name"
                name="Agreement_Name"
                class="form-control"
                placeholder="Enter agreement name"
                required>
        </div>

    <div class="mb-3">
         <div class="col-lg-6">
            <label class="form-label" for="Agreement_Type">
                Agreement Type
            </label>

            <select
                id="Agreement_Type"
                name="Agreement_Type"
                class="form-select">
                <option value="">Select Agreement Type</option>
                <option value="Terms & Conditions">Terms & Conditions</option>
                <option value="Privacy Policy">Privacy Policy</option>
                <option value="Visitor Agreement">Visitor Agreement</option>
                <option value="Other">Other</option>
            </select>
        </div>

    </div>

</div>


<div class="row">
<div class="col-lg-6">
    <div class="mb-3">
        <label class="form-label" for="Description">
            Description
        </label>

        <textarea
            id="Description"
            name="Description"
            class="form-control"
            rows="4"
            placeholder="Enter description"></textarea>
    </div>
</div>


<div class="row">
<div class="col-lg-12">
    <div class="mb-3">
        <label class="form-label" for="Agreement_Content">
            Agreement Content <span class="text-danger">*</span>
        </label>

        <div
            id="Agreement_Content"
            name="Agreement_Content"
            class="form-control"
            contenteditable="true"
            style="min-height: 200px;"
            placeholder="Enter agreement content">
        </div>
    </div>
</div>










                   









































































































                    <div class="row">

                    <div class="col-lg-12">

                        <div id="result_form"></div>

                        <button
                            type="submit"
                            class="btn btn-primary btn-sm"
                            name="submit"
                            id="btn_save">
                            <i class="mdi mdi-plus"></i> Create Department
                        </button>

                    </div>

                </div>

            </div>
        </div>
    </form>

</div>

<script>
    $(document).ready(function () {

        $('#state_id').change(function () {

            var state_id = $(this).val();

            $.ajax({
                url: '{{ url("/") }}/get-cities',
                method: 'GET',
                data: {
                    state_id: state_id
                },
                success: function (data) {

                    $('#city_id').empty();

                    $.each(data, function (key, value) {

                        $('#city_id').append(
                            '<option value="' + value.id + '">' +
                            value.name +
                            '</option>'
                        );

                    });

                }
            });

        });

    });
</script>

@include('user.departments.js.add_js')