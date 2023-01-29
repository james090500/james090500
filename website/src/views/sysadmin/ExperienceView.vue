<template>
    <section>
        <div class="experience-start"></div>
        <div class="experience" id="my-experience">
            <h1 class="text-center mb-0">My Experience</h1>
            <p class="text-center mt-0">Microsoft Windows, Microsoft Office, Hyper-V, Active Directory, Group Policy and More</p>
            <div class="row justify-content-center pt-10">
                <div class="col-md-4">
                    <h4 class="text-center">A Detailed List</h4>
                    <div class="row">
                        <div class="col px-10">
                            <ul>
                                <li>Microsoft Windows XP - 11</li>
                                <li>Microsoft Windows Server 2003 - 2022</li>
                                <li>Microsoft Office</li>
                                <li>Microsoft Hyper-V</li>
                                <li>Microsoft 365</li>
                                <li>Microsoft SharePoint</li>
                                <li>Microsoft OneDrive</li>
                                <li>Microsoft Exchange</li>
                                <li>Microsoft Teams</li>
                            </ul>
                        </div>
                        <div class="col px-10">
                            <ul>
                                <li>Microsoft Azure</li>
                                <li>Microsoft Intune</li>
                                <li>Active Directory</li>
                                <li>Group Policy</li>
                                <li>DrayTek</li>
                                <li>UniFi</li>
                                <li>Networking</li>
                                <li>Linux</li>
                                <li>Physical Hardware</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 p-20 p-md-0">
                    <p>
                        I studied a BTEC Level 3 Extended Diploma in Computer between 2016 and 2018. During my time in education, I was required to have unpaid work experience
                        which is when I first started at System 3. Once my education was completed, I moved Full Time at System 3 as a Support Technician.
                    </p>
                    <p>
                        My role includes answering phone, emails and tickets from customers and helping them resolve any issues they face. I also frequently visit site to deploy new
                        equipment or to resolve advanced networking issues.
                    </p>
                    <p>
                        I am an experienced and hardworking IT Technician specialising in Microsoft 365, Windows 10/11 and Windows Server. I use many different systems such as DrayTek,
                        Unifi, Linux, Hyper-V and a wide variety of Microsoft 365 systems such as Azure, SharePoint and Teams to create appropriate, fast and seamless solutions.
                        I am actively involved in the tech community and a fantastic team player.
                    </p>
                    <p>
                        In my spare time I enjoy programming, playing games, contributing to various open-source communities and going out with friends.
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<style scoped lang="scss">
    h1 {
        line-height: 5rem;
        font-size: 7rem;
    }

    .experience-start, .experience {
        height: 100vh;
        width: 100%;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
    }

    .experience-start {
        position: absolute;
        background-image: url('/svg/experience-start.svg');
    }

    .experience {
        padding-top: 20vh;
        padding-bottom: 5vh;
        min-height: 110vh;
        background-image: url('/img/experience.jpg');
    }

    .btn-large-data {
        transition: 0.5s;
        background-size: 200% auto;
        background-image: linear-gradient(to right, #00d2ff 0%, #3a7bd5  51%, #00d2ff  100%) !important;

        &:hover {
            background-position: right center;
        }
    }
</style>