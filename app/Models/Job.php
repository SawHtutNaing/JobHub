<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $casts = [
        'qualifications' => 'array',
        'subCategories' => 'array'
    ];
    // public static function JobList()
    // {
    //     return json_decode('

    //     [
    //         {
    //             "name": "Frontend Developer",
    //             "category": "IT",
    //             "subCategories": ["HTML", "CSS"],
    //             "companyName": "Tech Innovators",
    //             "jobType": "Remote",
    //             "salary": "$60K-$80K",
    //             "date": "2024-06-10",
    //             "image": "one.jpg",
    //             "description": "As a Frontend Developer at Tech Innovators, you will be responsible for implementing visual elements that users see and interact with in a web application. You will work closely with the UI/UX designer to bridge the gap between graphical design and technical implementation, defining how the application looks and works.",
    //             "short_description": "Implement visual elements and work with UI/UX designers to bridge design and technical implementation.",
    //             "responsibilities": [
    //                 "Develop new user-facing features ensuring technical feasibility of UI/UX designs.",
    //                 "Build reusable code and libraries for future use, optimizing for speed and scalability.",
    //                 "Collaborate with other team members and stakeholders to ensure smooth project delivery."
    //             ],
    //             "qualifications": [
    //                 "Proficiency in HTML, CSS, and JavaScript with a strong understanding of web development principles.",
    //                 "Experience with responsive and adaptive design, along with excellent problem-solving and communication skills."
    //             ]
    //         },
    //         {
    //             "name": "Backend Developer",
    //             "category": "IT",
    //             "subCategories": ["Node.js", "Express"],
    //             "companyName": "NextGen Solutions",
    //             "jobType": "Hybrid",
    //             "salary": "$70K-$90K",
    //             "date": "2024-06-05",
    //             "image": "one.jpg",
    //             "description": "As a Backend Developer at NextGen Solutions, you will focus on server-side development, managing database interactions, server logic, and integration. Your role involves ensuring high performance and responsiveness to requests from the frontend.",
    //             "short_description": "Focus on server-side development, managing database interactions and server logic.",
    //             "responsibilities": [
    //                 "Develop server-side logic and integrate elements developed by front-end developers.",
    //                 "Build reusable code and libraries for future use, optimizing the application for speed and scalability.",
    //                 "Ensure the technical feasibility of server-side components and collaborate with front-end developers."
    //             ],
    //             "qualifications": [
    //                 "Proficiency in Node.js and Express, with a solid understanding of server-side principles.",
    //                 "Experience with database management and server optimization techniques, along with strong problem-solving skills."
    //             ]
    //         },
    //         {
    //             "name": "Data Scientist",
    //             "category": "IT",
    //             "subCategories": ["Python", "ML"],
    //             "companyName": "Data Insights",
    //             "jobType": "Remote",
    //             "salary": "$90K-$120K",
    //             "date": "2024-06-08",
    //             "image": "one.jpg",
    //             "description": "As a Data Scientist at Data Insights, you will analyze and interpret complex data to help companies make informed decisions. Your work will involve applying statistical techniques and machine learning algorithms to extract meaningful insights from large datasets.",
    //             "short_description": "Analyze and interpret complex data to help companies make informed decisions.",
    //             "responsibilities": [
    //                 "Analyze and interpret complex datasets to provide actionable insights for business decisions.",
    //                 "Develop and implement machine learning models to solve specific business problems.",
    //                 "Collaborate with cross-functional teams to understand their data needs and deliver solutions."
    //             ],
    //             "qualifications": [
    //                 "Proficiency in Python and machine learning libraries, with a strong background in statistical analysis.",
    //                 "Experience in data manipulation and visualization tools, along with excellent problem-solving and communication skills."
    //             ]
    //         },
    //         {
    //             "name": "UI/UX Designer",
    //             "category": "IT",
    //             "subCategories": ["Figma", "Sketch"],
    //             "companyName": "Creative Minds",
    //             "jobType": "Hybrid",
    //             "salary": "$60K-$80K",
    //             "date": "2024-06-11",
    //             "image": "one.jpg",
    //             "description": "As a UI/UX Designer at Creative Minds, you will enhance user satisfaction by improving the usability, accessibility, and pleasure provided in the interaction with a product. Your work will involve creating visually appealing and user-friendly interfaces.",
    //             "short_description": "Enhance user satisfaction by improving usability, accessibility, and pleasure in interaction with a product.",
    //             "responsibilities": [
    //                 "Design and prototype user interfaces using tools like Figma and Sketch.",
    //                 "Conduct user research and testing to gather feedback and improve designs.",
    //                 "Collaborate with developers to ensure designs are implemented accurately."
    //             ],
    //             "qualifications": [
    //                 "Proficiency in design tools such as Figma and Sketch, with a strong understanding of UI/UX principles.",
    //                 "Experience in conducting user research and usability testing, along with excellent problem-solving and communication skills."
    //             ]
    //         },
    //         {
    //             "name": "DevOps Engineer",
    //             "category": "IT",
    //             "subCategories": ["AWS", "Docker"],
    //             "companyName": "Cloud Solutions",
    //             "jobType": "Remote",
    //             "salary": "$80K-$110K",
    //             "date": "2024-06-07",
    //             "image": "one.jpg",
    //             "description": "As a DevOps Engineer at Cloud Solutions, you will work on the automation of the development process, integrating and deploying applications efficiently. Your role involves managing infrastructure and ensuring continuous integration and delivery.",
    //             "short_description": "Work on automation of development processes, integrating and deploying applications efficiently.",
    //             "responsibilities": [
    //                 "Implement and manage CI/CD pipelines to automate deployment processes.",
    //                 "Monitor and optimize infrastructure for performance and scalability.",
    //                 "Collaborate with development teams to ensure smooth integration and deployment of applications."
    //             ],
    //             "qualifications": [
    //                 "Proficiency in AWS and Docker, with a strong understanding of DevOps practices and tools.",
    //                 "Experience in managing CI/CD pipelines and infrastructure optimization, along with excellent problem-solving skills."
    //             ]
    //         },
    //         {
    //             "name": "Full Stack Developer",
    //             "category": "IT",
    //             "subCategories": ["React", "Node.js"],
    //             "companyName": "Innovative Web",
    //             "jobType": "Hybrid",
    //             "salary": "$80K-$100K",
    //             "date": "2024-06-09",
    //             "image": "one.jpg",
    //             "description": "As a Full Stack Developer at Innovative Web, you will handle both frontend and backend development, creating a seamless interaction between the client and server. Your role involves building and maintaining web applications from conception to deployment.",
    //             "short_description": "Handle both frontend and backend development, creating seamless interaction between client and server.",
    //             "responsibilities": [
    //                 "Develop frontend and backend components using React and Node.js.",
    //                 "Ensure the application is responsive, scalable, and optimized for performance.",
    //                 "Collaborate with designers and other developers to create a cohesive product."
    //             ],
    //             "qualifications": [
    //                 "Proficiency in React and Node.js, with a solid understanding of full stack development principles.",
    //                 "Experience in building and deploying web applications, along with strong problem-solving and communication skills."
    //             ]
    //         },
    //         {
    //             "name": "QA Engineer",
    //             "category": "IT",
    //             "subCategories": ["Manual", "Automation"],
    //             "companyName": "Quality Matters",
    //             "jobType": "Remote",
    //             "salary": "$70K-$90K",
    //             "date": "2024-06-06",
    //             "image": "one.jpg",
    //             "description": "As a QA Engineer at Quality Matters, you will ensure that the software product meets quality standards and is free of bugs. Your work involves both manual and automated testing to identify issues and ensure a smooth user experience.",
    //             "short_description": "Ensure software products meet quality standards and are free of bugs through manual and automated testing.",
    //             "responsibilities": [
    //                 "Develop and execute test plans and test cases for manual and automated testing.",
    //                 "Identify, document, and track software defects to ensure they are resolved.",
    //                 "Collaborate with development teams to understand requirements and improve test coverage."
    //             ],
    //             "qualifications": [
    //                 "Proficiency in manual and automated testing methodologies, with a solid understanding of QA principles.",
    //                 "Experience in developing and executing test plans, along with excellent problem-solving and communication skills."
    //             ]
    //         },
    //         {
    //             "name": "Network Engineer",
    //             "category": "IT",
    //             "subCategories": ["Cisco", "Security"],
    //             "companyName": "NetSecure",
    //             "jobType": "Onsite",
    //             "salary": "$80K-$100K",
    //             "date": "2024-06-02",
    //             "image": "one.jpg",
    //             "description": "As a Network Engineer at NetSecure, you will plan, construct, and manage networks to ensure they are optimized and secure. Your role involves configuring and maintaining network infrastructure, troubleshooting network issues, and ensuring network security.",
    //             "short_description": "Plan, construct, and manage networks to ensure they are optimized and secure.",
    //             "responsibilities": [
    //                 "Design, implement, and maintain network infrastructure to meet business needs.",
    //                 "Monitor network performance and troubleshoot issues to ensure optimal operation.",
    //                 "Implement security measures to protect network integrity and data."
    //             ],
    //             "qualifications": [
    //                 "Proficiency in network configuration and management, with experience in Cisco technologies.",
    //                 "Strong understanding of network security principles and best practices, along with excellent problem-solving skills."
    //             ]
    //         },
    //         {
    //             "name": "Product Manager",
    //             "category": "IT",
    //             "subCategories": ["Agile", "Scrum"],
    //             "companyName": "Tech Innovators",
    //             "jobType": "Remote",
    //             "salary": "$100K-$130K",
    //             "date": "2024-06-01",
    //             "image": "one.jpg",
    //             "description": "As a Product Manager at Tech Innovators, you will oversee the development of products, ensuring they meet user needs and align with business goals. Your role involves defining product vision, managing the product lifecycle, and collaborating with cross-functional teams.",
    //             "short_description": "Oversee product development, ensuring it meets user needs and aligns with business goals.",
    //             "responsibilities": [
    //                 "Define product vision and strategy based on market research and user feedback.",
    //                 "Manage the product lifecycle from conception to launch, ensuring timely delivery.",
    //                 "Collaborate with development, marketing, and sales teams to ensure product success."
    //             ],
    //             "qualifications": [
    //                 "Proficiency in Agile and Scrum methodologies, with a strong background in product management.",
    //                 "Experience in defining product vision and managing product lifecycles, along with excellent leadership and communication skills."
    //             ]
    //         },
    //         {
    //             "name": "SysAdmin",
    //             "category": "IT",
    //             "subCategories": ["Linux", "Windows"],
    //             "companyName": "SysAdmin Pros",
    //             "jobType": "Remote",
    //             "salary": "$70K-$90K",
    //             "date": "2024-05-30",
    //             "image": "one.jpg",
    //             "description": "As a SysAdmin at SysAdmin Pros, you will maintain, upgrade, and manage software, hardware, and networks. Your role involves ensuring the smooth operation of IT infrastructure, addressing system issues, and implementing security measures.",
    //             "short_description": "Maintain, upgrade, and manage software, hardware, and networks, ensuring smooth operation of IT infrastructure.",
    //             "responsibilities": [
    //                 "Monitor and maintain systems and networks to ensure optimal performance.",
    //                 "Install, configure, and update software and hardware components.",
    //                 "Implement and manage security measures to protect IT infrastructure."
    //             ],
    //             "qualifications": [
    //                 "Proficiency in Linux and Windows system administration, with a solid understanding of IT infrastructure management.",
    //                 "Experience in implementing security measures and troubleshooting system issues, along with excellent problem-solving skills."
    //             ]
    //         },
    //         {
    //             "name": "DB Admin",
    //             "category": "IT",
    //             "subCategories": ["SQL", "Oracle"],
    //             "companyName": "DataCare",
    //             "jobType": "Remote",
    //             "salary": "$80K-$100K",
    //             "date": "2024-05-26",
    //             "image": "one.jpg",
    //             "description": "As a Database Administrator at DataCare, you will manage databases, ensuring data is stored, organized, and accessible efficiently and securely. Your role involves database configuration, performance tuning, and backup and recovery operations.",
    //             "short_description": "Manage databases, ensuring data is stored, organized, and accessible efficiently and securely.",
    //             "responsibilities": [
    //                 "Configure, monitor, and maintain database systems to ensure optimal performance.",
    //                 "Perform backup and recovery operations to protect data integrity.",
    //                 "Collaborate with development teams to ensure efficient database design and usage."
    //             ],
    //             "qualifications": [
    //                 "Proficiency in SQL and Oracle database management, with a strong understanding of database administration principles.",
    //                 "Experience in performance tuning and backup and recovery operations, along with excellent problem-solving skills."
    //             ]
    //         }
    //     ]

    //         ');
    // }
    public static function  JobList()
    {
        return Job::all();
    }
}
