<template>
    <section>
        <div class="experience-start"></div>
        <div class="experience" id="my-experience">
            <h1 class="text-center mb-0">My Experience</h1>
            <p class="text-center mt-0">Microsoft Windows, Microsoft Office, Hyper-V, Active Directory, Group Policy and More</p>
            <div class="container-fluid">
                <div class="row justify-content-center pt-10">
                    <div class="col-md-8 p-5 p-md-0">
                        <p>
                            With over seven years of experience as an IT professional, I have developed a robust skill set in server administration,
                            virtualisation, and storage management that aligns closely with the requirements of the Servers and Storage Administrator
                            role at the University of Cambridge. My current role as an IT Technician at System3 has honed my expertise in managing
                            various and different complex IT environments as well as years of experience with various personal projects which are used
                            by hundreds of thousands of people and receive tens of millions of requests per day.
                        </p>
                        <p>
                            I have worked extensively with Linux in the form of Debian, Ubuntu and Arch both in my
                            professional career and spare time. I have deployed various systems for customers which range from kiosk displays to web
                            and SQL servers. In my personal experience, I have run many Linux systems from Raspberry Pi's all the way to cloud
                            hosted dedicated servers. Regardless of the systems, I maintain robust firewalls, secure access, networking (IPv4 and IPv6),
                            load balancing and general system maintenance such as updates. These systems also incorporate containerisation
                            technology using Docker to ensure they can easily be redeployed and scaled.
                        </p>
                        <p>
                            I have worked with many different backup providers and solutions, some examples of these are simple
                            onsite disk backups, NAS/SAN system backups, onsite backups which are then uploaded offsite to an immutable cloud
                            storage provider and systems which are replicated to cross-site for disaster recovery. I have a strong understanding of best
                            backup practices, such as the 3-2-1 rule, to ensure systems aren't left unprotected and vulnerable to backups being lost or
                            unviable. I have worked closely with customers in the event of a disaster to ensure that their data can be restored quickly
                            and remotely using an onsite NAS and by restoring from cloud, as well as ensuring the data is kept secure by encrypting
                            backup data and utilising immutability to prevent accidental data deletion.
                        </p>
                        <p>
                            Whilst at System3 I have gained strong experience in this skill by
                            working alongside my team on an IT helpdesk. This has been a critical role providing a wealth of experience, as I have been
                            able to monitor, diagnose and proactively fix issues by troubleshooting and creating workarounds in unexpected scenarios or
                            unique situations. I have been able to work closely with a wide range of network engineers, IT managers and customers and
                            am able to effectively explain and re-assure them when they are concerned.
                        </p>
                        <p>
                            I have handled my own in-team technical projects by deploying various servers for different
                            customers. Examples of these range from simple on premises towers to powerful rack mount systems. These systems have
                            improved customers infrastructure by supporting physical to virtual migrations and have been configured to the appropriate
                            spec for each situation, utilising suitable RAID configuration depending on needs, CPU, RAM and NIC configurations
                            depending on usage. I also have experience on VMWare from simple single hosts models to multi-host systems sharing
                            VMFS datastores and utilising DRS.
                        </p>
                        <p>
                            I am proficient in various programming, scripting and markup language such as JavaScript,
                            PowerShell, PHP, C#, Java, SQL, HTML Web Stack and bash. I have used these languages to help automate systems to
                            help with my day-to-day tasks. I have used PowerShell, for quickly organising data structures, or for modifying incoming files
                            in a folder, so they then can be imported into to another system, essentially linking these applications together. I have written
                            internal management tools at System3 which are used companywide to help manage our customer base, monitor external
                            networks and monitor backups. I have also written various monitoring tools incorporating third party APIs such as a RAID
                            monitoring application which uses HP SSA CLI to monitor the health of the raid array.
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