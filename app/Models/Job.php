<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;


    public static function  JobList()
    {
        return json_decode('
        [
            {
                "name": "Frontend Developer",
                "category": "IT",
                "subCategories": ["HTML", "CSS", "JavaScript"],
                "companyName": "Tech Innovators",
                "jobType": "Remote",
                "salary": "$70,000 - $90,000",
                "date": "2024-05-15"
            },
            {
                "name": "Backend Developer",
                "category": "IT",
                "subCategories": ["Node.js", "Express", "MongoDB"],
                "companyName": "NextGen Solutions",
                "jobType": "Hybrid",
                "salary": "$80,000 - $100,000",
                "date": "2024-05-14"
            },
            {
                "name": "Project Manager",
                "category": "Construction",
                "subCategories": ["Site Management", "Safety"],
                "companyName": "BuildRight Inc.",
                "jobType": "Onsite",
                "salary": "$90,000 - $110,000",
                "date": "2024-05-13"
            },
            {
                "name": "Data Scientist",
                "category": "IT",
                "subCategories": ["Python", "Machine Learning", "Data Analysis"],
                "companyName": "Data Insights",
                "jobType": "Remote",
                "salary": "$100,000 - $130,000",
                "date": "2024-05-12"
            },
            {
                "name": "Civil Engineer",
                "category": "Construction",
                "subCategories": ["Structural Design", "Project Planning"],
                "companyName": "Urban Build Co.",
                "jobType": "Onsite",
                "salary": "$70,000 - $90,000",
                "date": "2024-05-11"
            },
            {
                "name": "UI/UX Designer",
                "category": "IT",
                "subCategories": ["Figma", "Sketch", "User Research"],
                "companyName": "Creative Minds",
                "jobType": "Hybrid",
                "salary": "$60,000 - $80,000",
                "date": "2024-05-10"
            },
            {
                "name": "DevOps Engineer",
                "category": "IT",
                "subCategories": ["AWS", "Docker", "Kubernetes"],
                "companyName": "Cloud Solutions",
                "jobType": "Remote",
                "salary": "$90,000 - $120,000",
                "date": "2024-05-09"
            },
            {
                "name": "Electrician",
                "category": "Construction",
                "subCategories": ["Wiring", "Troubleshooting"],
                "companyName": "ElectroFix",
                "jobType": "Onsite",
                "salary": "$50,000 - $70,000",
                "date": "2024-05-08"
            },
            {
                "name": "Full Stack Developer",
                "category": "IT",
                "subCategories": ["React", "Node.js", "PostgreSQL"],
                "companyName": "Innovative Web",
                "jobType": "Hybrid",
                "salary": "$80,000 - $110,000",
                "date": "2024-05-07"
            },
            {
                "name": "Site Supervisor",
                "category": "Construction",
                "subCategories": ["Team Management", "Quality Control"],
                "companyName": "BuildTech",
                "jobType": "Onsite",
                "salary": "$60,000 - $80,000",
                "date": "2024-05-06"
            },
            {
                "name": "QA Engineer",
                "category": "IT",
                "subCategories": ["Manual Testing", "Automation Testing"],
                "companyName": "Quality Matters",
                "jobType": "Remote",
                "salary": "$70,000 - $90,000",
                "date": "2024-05-05"
            },
            {
                "name": "Marketing Specialist",
                "category": "Marketing",
                "subCategories": ["SEO", "Content Marketing"],
                "companyName": "Market Leaders",
                "jobType": "Hybrid",
                "salary": "$50,000 - $70,000",
                "date": "2024-05-04"
            },
            {
                "name": "Network Engineer",
                "category": "IT",
                "subCategories": ["Cisco", "Network Security"],
                "companyName": "NetSecure",
                "jobType": "Onsite",
                "salary": "$80,000 - $100,000",
                "date": "2024-05-03"
            },
            {
                "name": "Product Manager",
                "category": "IT",
                "subCategories": ["Agile", "Scrum", "Product Roadmaps"],
                "companyName": "Tech Innovators",
                "jobType": "Remote",
                "salary": "$100,000 - $130,000",
                "date": "2024-05-02"
            },
            {
                "name": "Architect",
                "category": "Construction",
                "subCategories": ["Building Design", "AutoCAD"],
                "companyName": "DesignPro",
                "jobType": "Onsite",
                "salary": "$90,000 - $120,000",
                "date": "2024-05-01"
            },
            {
                "name": "System Administrator",
                "category": "IT",
                "subCategories": ["Linux", "Windows Server", "Cloud Management"],
                "companyName": "SysAdmin Pros",
                "jobType": "Remote",
                "salary": "$70,000 - $90,000",
                "date": "2024-04-30"
            },
            {
                "name": "HR Specialist",
                "category": "Human Resources",
                "subCategories": ["Recruitment", "Employee Relations"],
                "companyName": "People First",
                "jobType": "Hybrid",
                "salary": "$60,000 - $80,000",
                "date": "2024-04-29"
            },
            {
                "name": "Graphic Designer",
                "category": "Design",
                "subCategories": ["Photoshop", "Illustrator"],
                "companyName": "Creative Arts",
                "jobType": "Remote",
                "salary": "$50,000 - $70,000",
                "date": "2024-04-28"
            },
            {
                "name": "Construction Worker",
                "category": "Construction",
                "subCategories": ["General Labor", "Safety"],
                "companyName": "BuildStrong",
                "jobType": "Onsite",
                "salary": "$40,000 - $60,000",
                "date": "2024-04-27"
            },
            {
                "name": "Database Administrator",
                "category": "IT",
                "subCategories": ["SQL", "Oracle", "Database Management"],
                "companyName": "DataCare",
                "jobType": "Remote",
                "salary": "$80,000 - $100,000",
                "date": "2024-04-26"
            }
        ]
        ');
    }
}
