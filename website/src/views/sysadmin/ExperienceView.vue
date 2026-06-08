<template>
    <section>
        <div class="experience-start" />
        <div class="experience" id="my-experience">
            <h1 class="text-center mb-0">My Experience</h1>
            <p class="text-center mt-0">
                Microsoft Windows, Microsoft Office, Hyper-V, Active Directory,
                Group Policy and More
            </p>
            <div class="container-fluid">
                <div class="row justify-content-center pt-10">
                    <div class="col-md-8 p-5 p-md-0">
                        <p>
                            As a seasoned IT professional, I bring a rich blend
                            of technical expertise and strong interpersonal
                            skills. My experience spans Workstations, Servers,
                            Windows, Mac, Linux, Programming, automation,
                            cybersecurity, problem-solving, and troubleshooting.
                        </p>
                        <p>
                            Beyond technical skills, I am a highly sociable and
                            approachable individual who thrives on building
                            strong relationships with clients and colleagues. I
                            understand the importance of keeping customers
                            happy, especially when resolving issues, and I excel
                            at turning challenges into opportunities for
                            positive engagement. My ability to relate to people
                            and communicate complex technical concepts in an
                            accessible way has been key to maintaining client
                            satisfaction.
                        </p>
                        <p>
                            I take pride in being able to quickly adapt to new
                            software and systems, and I have a proven track
                            record of devising creative solutions to difficult
                            problems.
                        </p>
                        <p>
                            Outside of work, I enjoy contributing to open-source
                            projects and balancing my passion for technology
                            with an active social life. I’m not just looking for
                            a job, I’m looking for a dynamic environment where I
                            can bring my technical expertise, problem-solving
                            abilities, and friendly personality to both the team
                            and the clients.
                        </p>
                    </div>
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

.experience-start,
.experience {
    min-height: 100vh;
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
    background-image: linear-gradient(
        to right,
        #00d2ff 0%,
        #3a7bd5 51%,
        #00d2ff 100%
    ) !important;

    &:hover {
        background-position: right center;
    }
}
</style>
