<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    public static function JobList()
    {
        return json_decode('
        [
            {
                "name": "Frontend Developer",
                "category": "IT",
                "subCategories": ["HTML", "CSS"],
                "companyName": "Tech Innovators",
                "jobType": "Remote",
                "salary": "$60K-$80K",
                "date": "2024-06-10",
                "image": "one.jpg"
            },
            {
                "name": "Backend Developer",
                "category": "IT",
                "subCategories": ["Node.js", "Express"],
                "companyName": "NextGen Solutions",
                "jobType": "Hybrid",
                "salary": "$70K-$90K",
                "date": "2024-06-05",
                "image": "one.jpg"
            },
            {
                "name": "Project Manager",
                "category": "Construction",
                "subCategories": ["Site Mgmt", "Safety"],
                "companyName": "BuildRight Inc.",
                "jobType": "Onsite",
                "salary": "$80K-$100K",
                "date": "2024-06-03",
                "image": "two.jpg"
            },
            {
                "name": "Data Scientist",
                "category": "IT",
                "subCategories": ["Python", "ML"],
                "companyName": "Data Insights",
                "jobType": "Remote",
                "salary": "$90K-$120K",
                "date": "2024-06-08",
                "image": "one.jpg"
            },
            {
                "name": "Civil Engineer",
                "category": "Construction",
                "subCategories": ["Design", "Planning"],
                "companyName": "Urban Build Co.",
                "jobType": "Onsite",
                "salary": "$70K-$90K",
                "date": "2024-06-02",
                "image": "two.jpg"
            },
            {
                "name": "UI/UX Designer",
                "category": "IT",
                "subCategories": ["Figma", "Sketch"],
                "companyName": "Creative Minds",
                "jobType": "Hybrid",
                "salary": "$60K-$80K",
                "date": "2024-06-11",
                "image": "one.jpg"
            },
            {
                "name": "DevOps Engineer",
                "category": "IT",
                "subCategories": ["AWS", "Docker"],
                "companyName": "Cloud Solutions",
                "jobType": "Remote",
                "salary": "$80K-$110K",
                "date": "2024-06-07",
                "image": "one.jpg"
            },
            {
                "name": "Electrician",
                "category": "Construction",
                "subCategories": ["Wiring", "Fixes"],
                "companyName": "ElectroFix",
                "jobType": "Onsite",
                "salary": "$50K-$70K",
                "date": "2024-06-01",
                "image": "two.jpg"
            },
            {
                "name": "Full Stack Dev",
                "category": "IT",
                "subCategories": ["React", "Node.js"],
                "companyName": "Innovative Web",
                "jobType": "Hybrid",
                "salary": "$80K-$100K",
                "date": "2024-06-09",
                "image": "one.jpg"
            },
            {
                "name": "Site Supervisor",
                "category": "Construction",
                "subCategories": ["Team Mgmt", "QC"],
                "companyName": "BuildTech",
                "jobType": "Onsite",
                "salary": "$60K-$80K",
                "date": "2024-06-04",
                "image": "two.jpg"
            },
            {
                "name": "QA Engineer",
                "category": "IT",
                "subCategories": ["Manual", "Automation"],
                "companyName": "Quality Matters",
                "jobType": "Remote",
                "salary": "$70K-$90K",
                "date": "2024-06-06",
                "image": "one.jpg"
            },
            {
                "name": "Marketing Spec",
                "category": "Marketing",
                "subCategories": ["SEO", "Content"],
                "companyName": "Market Leaders",
                "jobType": "Hybrid",
                "salary": "$60K-$80K",
                "date": "2024-06-03",
                "image": "three.png"
            },
            {
                "name": "Network Engineer",
                "category": "IT",
                "subCategories": ["Cisco", "Security"],
                "companyName": "NetSecure",
                "jobType": "Onsite",
                "salary": "$80K-$100K",
                "date": "2024-06-02",
                "image": "one.jpg"
            },
            {
                "name": "Product Manager",
                "category": "IT",
                "subCategories": ["Agile", "Scrum"],
                "companyName": "Tech Innovators",
                "jobType": "Remote",
                "salary": "$100K-$130K",
                "date": "2024-06-01",
                "image": "one.jpg"
            },
            {
                "name": "Architect",
                "category": "Construction",
                "subCategories": ["Design", "AutoCAD"],
                "companyName": "DesignPro",
                "jobType": "Onsite",
                "salary": "$90K-$120K",
                "date": "2024-05-31",
                "image": "two.jpg"
            },
            {
                "name": "SysAdmin",
                "category": "IT",
                "subCategories": ["Linux", "Windows"],
                "companyName": "SysAdmin Pros",
                "jobType": "Remote",
                "salary": "$70K-$90K",
                "date": "2024-05-30",
                "image": "one.jpg"
            },
            {
                "name": "HR Specialist",
                "category": "HR",
                "subCategories": ["Recruitment", "Relations"],
                "companyName": "People First",
                "jobType": "Hybrid",
                "salary": "$60K-$80K",
                "date": "2024-05-29",
                "image": "four.png"
            },
            {
                "name": "Graphic Designer",
                "category": "Design",
                "subCategories": ["Photoshop", "Illustrator"],
                "companyName": "Creative Arts",
                "jobType": "Remote",
                "salary": "$50K-$70K",
                "date": "2024-05-28",
                "image": "five.jpg"
            },
            {
                "name": "Construction Worker",
                "category": "Construction",
                "subCategories": ["Labor", "Safety"],
                "companyName": "BuildStrong",
                "jobType": "Onsite",
                "salary": "$40K-$60K",
                "date": "2024-05-27",
                "image": "two.jpg"
            },
            {
                "name": "DB Admin",
                "category": "IT",
                "subCategories": ["SQL", "Oracle"],
                "companyName": "DataCare",
                "jobType": "Remote",
                "salary": "$80K-$100K",
                "date": "2024-05-26",
                "image": "one.jpg"
            }
        ]');
    }
}
