<?php
class Job
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
        // if ($this->db) {
        //     echo "Connected to the   database successfully!";
        // }
    }




    //GET all Jobs 
    public function getAllJobs()
    {
        $this->db->query("SELECT job.* , categories.name AS cname 
        FROM job
        INNER JOIN  categories 
        ON job.category_id	= categories.id  ORDER BY  post_date DESC");
        //Assign Result Set 
        $results = $this->db->resultSet();
        return $results;
    }
    public function category()
    {
        $this->db->query("SELECT * FROM categories");
        $results = $this->db->resultSet();
        return $results;
    }

    // Get Job BY Category
    public function getByCategory($category)
    {
        $this->db->query("SELECT job.* , categories.name AS cname 
        FROM job
        INNER JOIN  categories 
        ON job.category_id	= categories.id WHERE job.category_id = $category  ORDER BY  post_date DESC");
        //Assign Result Set 
        $results = $this->db->resultSet();
        return $results;
    }

    // Get category 
    public function getCategory($category_id)
    {
        $this->db->query("SELECT * FROM categories WHERE id = :category_id");
        $this->db->bind(':category_id', $category_id);

        //Assign Row 
        $row = $this->db->single();
        return $row;
    }
}
