<template>

<div class="container">
    <div class="team-single">
        <div class="row">
            <div class="col-lg-4 col-md-5 xs-margin-30px-bottom">
                <div class="team-single-img">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                </div>
                <div class="bg-light-gray padding-30px-all md-padding-25px-all sm-padding-20px-all text-center">
                    <h4 class="margin-10px-bottom font-size24 md-font-size22 sm-font-size20 font-weight-600">Student</h4>
                    <p class="sm-width-95 sm-margin-auto">{{candidature.AdditionalData}}</p>
                    <div class="margin-20px-top team-single-icons">
                      
                    </div>
                </div>
            </div>

            <div class="col-lg-8 col-md-7">
                <div class="team-single-text padding-50px-left sm-no-padding-left">
                    <h4 class="font-size38 sm-font-size32 xs-font-size30">{{candidature.LastName}}</h4>
                    <p class="no-margin-bottom"></p>
                    <div class="contact-info-section margin-40px-tb">
                        <ul class="list-style9 no-margin">
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-graduation-cap text-orange"></i>
                                        <strong class="margin-10px-left text-orange">Mobility Type</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.MobilityType}}</p>
                                    </div>
                                </div>

                            </li>
                             <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-graduation-cap text-orange"></i>
                                        <strong class="margin-10px-left text-orange">Exchange Duration</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.ExchangeDuration}}</p>
                                    </div>
                                </div>

                            </li>
                            
                             <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-graduation-cap text-orange"></i>
                                        <strong class="margin-10px-left text-orange">Personal Id</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.PersonalId}}</p>
                                    </div>
                                </div>

                            </li>
                             <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-graduation-cap text-orange"></i>
                                        <strong class="margin-10px-left text-orange">Name</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.LastName}}</p>
                                    </div>
                                </div>

                            </li>
                             <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-graduation-cap text-orange"></i>
                                        <strong class="margin-10px-left text-orange">Date Of Birth</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.DateOfBirth}}</p>
                                    </div>
                                </div>

                            </li>
                            
                           
                             <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-graduation-cap text-orange"></i>
                                        <strong class="margin-10px-left text-orange">Native Language</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.NativeLanguage}}</p>
                                    </div>
                                </div>

                            </li>
                         

                            
                             <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-graduation-cap text-orange"></i>
                                        <strong class="margin-10px-left text-orange">Postal Adress</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.PostalAdress}}</p>
                                    </div>
                                </div>

                            </li>
                             <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-graduation-cap text-orange"></i>
                                        <strong class="margin-10px-left text-orange">Phone</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.Phone}}</p>
                                    </div>
                                </div>

                            </li>
                             <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-graduation-cap text-orange"></i>
                                        <strong class="margin-10px-left text-orange">Email</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.Email}}</p>
                                    </div>
                                </div>

                            </li>
                                                        
                            
                              <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-gem text-yellow"></i>
                                        <strong class="margin-10px-left text-yellow">Emergency Call Name</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.EmergencyCallName}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-gem text-yellow"></i>
                                        <strong class="margin-10px-left text-yellow">Emergency Call Adress</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.EmergencyCallAdress}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-gem text-yellow"></i>
                                        <strong class="margin-10px-left text-yellow">Emergency Call Language</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.EmergencyCallLanguage}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-gem text-yellow"></i>
                                        <strong class="margin-10px-left text-yellow">Emergency Call Phone</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.EmergencyCallPhone}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-gem text-yellow"></i>
                                        <strong class="margin-10px-left text-yellow">Home Institution Name</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.HomeInstitutionName}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-gem text-yellow"></i>
                                        <strong class="margin-10px-left text-yellow">Home Institution Adress</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.HomeInstitutionAdress}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-gem text-yellow"></i>
                                        <strong class="margin-10px-left text-yellow">Home Institution Country</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.HomeInstitutionCountry}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-gem text-yellow"></i>
                                        <strong class="margin-10px-left text-yellow">Departement Coordinator Name</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.DepartementCoordinatorName}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-gem text-yellow"></i>
                                        <strong class="margin-10px-left text-yellow">Departement Coordinator Phone</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.DepartementCoordinatorPhone}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-gem text-yellow"></i>
                                        <strong class="margin-10px-left text-yellow">Departement Coordinator Fax</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.DepartementCoordinatorFax}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-gem text-yellow"></i>
                                        <strong class="margin-10px-left text-yellow">Departement Coordinator Email</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.DepartementCoordinatorEmail}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-gem text-yellow"></i>
                                        <strong class="margin-10px-left text-yellow">Institutional Coordinator Phone</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.InstitutionalCoordinatorPhone}}</p>
                                    </div>
                                </div>

                            </li>
                             <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-gem text-yellow"></i>
                                        <strong class="margin-10px-left text-yellow">Institutional Coordinator Fax</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.InstitutionalCoordinatorFax}}</p>
                                    </div>
                                </div>

                            </li>
                             <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-gem text-yellow"></i>
                                        <strong class="margin-10px-left text-yellow">Institutional Coordinator Email</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.InstitutionalCoordinatorEmail}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-file text-lightred"></i>
                                        <strong class="margin-10px-left text-lightred">Exchange Program</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.ExchangeProgram}}</p>
                                    </div>
                                </div>

                            </li>
                             <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-file text-lightred"></i>
                                        <strong class="margin-10px-left text-lightred">Double Degree</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.DoubleDegree}}</p>
                                    </div>
                                </div>

                            </li>
                             <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-file text-lightred"></i>
                                        <strong class="margin-10px-left text-lightred">App Department</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.AppDepartment}}</p>
                                    </div>
                                </div>

                            </li>
                             <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-file text-lightred"></i>
                                        <strong class="margin-10px-left text-lightred">App Program</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.AppProgram}}</p>
                                    </div>
                                </div>

                            </li>
                             <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-file text-lightred"></i>
                                        <strong class="margin-10px-left text-lightred">App Subject</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.AppSubject}}</p>
                                    </div>
                                </div>

                            </li>
                             <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="far fa-file text-lightred"></i>
                                        <strong class="margin-10px-left text-lightred">App Additional Info</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.AppAdditionalInfo}}</p>
                                    </div>
                                </div>

                            </li>
                       

                     

                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-map-marker-alt text-green"></i>
                                        <strong class="margin-10px-left text-green">App Student Dormitory</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.AppStudentDormitory}}</p>
                                    </div>
                                </div>

                            </li>
                             <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-map-marker-alt text-green"></i>
                                        <strong class="margin-10px-left text-green">Current Studies</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.CurrentStudies}}</p>
                                    </div>
                                </div>

                            </li>
                             <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-map-marker-alt text-green"></i>
                                        <strong class="margin-10px-left text-green">Field Studies</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.FieldStudies}}</p>
                                    </div>
                                </div>

                            </li>
                             <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-map-marker-alt text-green"></i>
                                        <strong class="margin-10px-left text-green">Number of Years Completed</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.NumberYearsCompleted}}</p>
                                    </div>
                                </div>

                            </li>

                            <li>

                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-mobile-alt text-purple"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-purple">Instruction Language</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.InstructionLanguage}}</p>
                                    </div>
                                </div>

                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-md-5 col-5">
                                        <i class="fas fa-envelope text-pink"></i>
                                        <strong class="margin-10px-left xs-margin-four-left text-pink">Languages Known</strong>
                                    </div>
                                    <div class="col-md-7 col-7">
                                        <p>{{candidature.LanguageKnown1}} : {{candidature.LanguageLevel1}} - {{candidature.LanguageKnown2}} : {{candidature.LanguageLevel2}} - {{candidature.LanguageKnown3}} : {{candidature.LanguageLevel3}}</p>
                                    </div>
                                </div>
                            </li>
                        
                    
                        </ul>
        
                    </div>

                </div>
            </div>

            <div class="col-md-12">

            </div>
        </div>
    </div>
</div>

</template>

<script>
import {onMounted} from "vue" ; 
import { reactive } from "vue";
import useCandidatures from "../../composables/candidatures";
export default {
    props:{
    id:{
        required:true,
        type: String
    }
},

setup(props) {
    const { candidature, getCandidature } = useCandidatures() 
    onMounted(getCandidature(props.id))
    return {
            candidature,
            
        }
}
}





</script>
<style scoped>

body{
    font-size: 16px;
    color: #6f6f6f;
    font-weight: 400;
    line-height: 28px;
    letter-spacing: 0.8px;
    margin-top:20px;
}
.font-size38 {
    font-size: 38px;
}
.team-single-text .section-heading h4,
.section-heading h5 {
    font-size: 36px
}

.team-single-text .section-heading.half {
    margin-bottom: 20px
}

@media screen and (max-width: 1199px) {
    .team-single-text .section-heading h4,
    .section-heading h5 {
        font-size: 32px
    }
    .team-single-text .section-heading.half {
        margin-bottom: 15px
    }
}

@media screen and (max-width: 991px) {
    .team-single-text .section-heading h4,
    .section-heading h5 {
        font-size: 28px
    }
    .team-single-text .section-heading.half {
        margin-bottom: 10px
    }
}

@media screen and (max-width: 767px) {
    .team-single-text .section-heading h4,
    .section-heading h5 {
        font-size: 24px
    }
}


.team-single-icons ul li {
    display: inline-block;
    border: 1px solid #02c2c7;
    border-radius: 50%;
    color: #86bc42;
    margin-right: 8px;
    margin-bottom: 5px;
    -webkit-transition-duration: .3s;
    transition-duration: .3s
}

.team-single-icons ul li a {
    color: #02c2c7;
    display: block;
    font-size: 14px;
    height: 25px;
    line-height: 26px;
    text-align: center;
    width: 25px
}

.team-single-icons ul li:hover {
    background: #02c2c7;
    border-color: #02c2c7
}

.team-single-icons ul li:hover a {
    color: #fff
}

.team-social-icon li {
    display: inline-block;
    margin-right: 5px
}

.team-social-icon li:last-child {
    margin-right: 0
}

.team-social-icon i {
    width: 30px;
    height: 30px;
    line-height: 30px;
    text-align: center;
    font-size: 15px;
    border-radius: 50px
}

.padding-30px-all {
    padding: 30px;
}
.bg-light-gray {
    background-color: #f7f7f7;
}
.text-center {
    text-align: center!important;
}
img {
    max-width: 100%;
    height: auto;
}


.list-style9 {
    list-style: none;
    padding: 0
}

.list-style9 li {
    position: relative;
    padding: 0 0 15px 0;
    margin: 0 0 15px 0;
    border-bottom: 1px dashed rgba(0, 0, 0, 0.1)
}

.list-style9 li:last-child {
    border-bottom: none;
    padding-bottom: 0;
    margin-bottom: 0
}


.text-sky {
    color: #02c2c7
}

.text-orange {
    color: #e95601
}

.text-green {
    color: #5bbd2a
}

.text-yellow {
    color: #f0d001
}

.text-pink {
    color: #ff48a4
}

.text-purple {
    color: #9d60ff
}

.text-lightred {
    color: #ff5722
}

a.text-sky:hover {
    opacity: 0.8;
    color: #02c2c7
}

a.text-orange:hover {
    opacity: 0.8;
    color: #e95601
}

a.text-green:hover {
    opacity: 0.8;
    color: #5bbd2a
}

a.text-yellow:hover {
    opacity: 0.8;
    color: #f0d001
}

a.text-pink:hover {
    opacity: 0.8;
    color: #ff48a4
}

a.text-purple:hover {
    opacity: 0.8;
    color: #9d60ff
}

a.text-lightred:hover {
    opacity: 0.8;
    color: #ff5722
}

.custom-progress {
    height: 10px;
    border-radius: 50px;
    box-shadow: none;
    margin-bottom: 25px;
}
.progress {
    display: -ms-flexbox;
    display: flex;
    height: 1rem;
    overflow: hidden;
    font-size: .75rem;
    background-color: #e9ecef;
    border-radius: .25rem;
}


.bg-sky {
    background-color: #02c2c7
}

.bg-orange {
    background-color: #e95601
}

.bg-green {
    background-color: #5bbd2a
}

.bg-yellow {
    background-color: #f0d001
}

.bg-pink {
    background-color: #ff48a4
}

.bg-purple {
    background-color: #9d60ff
}

.bg-lightred {
    background-color: #ff5722
}
</style>
