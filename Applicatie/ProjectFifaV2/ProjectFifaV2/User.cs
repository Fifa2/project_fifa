using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Data;
using System.Data.SqlClient;

namespace ProjectFifaV2
{
    class User
    {
        public DatabaseHandler dbh;
        private string username;
        private string password;
        private int userid;
        private int score;

        public User(string username, string password)
        {
            this.dbh = new DatabaseHandler();
            this.username = username;
            this.password = password;
            this.userid = SetUserId();
            this.score = SetUserScore();
        }

        internal void AddScore(int score)
        {
            this.score += score;
        }

        private int SetUserId()
        {
            using (SqlCommand cmd = new SqlCommand("SELECT Id FROM TblUsers WHERE Username = @username AND Password = @password", dbh.GetCon()))
            {
                dbh.TestConnection();
                dbh.OpenConnectionToDB();
                cmd.Parameters.AddWithValue("username", GetUsername());
                cmd.Parameters.AddWithValue("password", password);
                return userid = (int)cmd.ExecuteScalar();
            }
        }

        protected void SaveUserScore()
        {
            using (SqlCommand cmd = new SqlCommand("UPDATE TblUsers SET Score = @GetScore WHERE Id = @GetId", dbh.GetCon()))
            {
                dbh.TestConnection();
                dbh.OpenConnectionToDB();
                cmd.Parameters.AddWithValue("GetScore", GetScore());
                cmd.Parameters.AddWithValue("GetId", GetUserId());
                cmd.ExecuteNonQuery();
            }
        }

        private int SetUserScore()
        {
            using (SqlCommand cmd = new SqlCommand("SELECT Score FROM TblUsers WHERE Id = @id", dbh.GetCon()))
            {
                dbh.TestConnection();
                dbh.OpenConnectionToDB();

                cmd.Parameters.AddWithValue("id", userid);
                return score = (int)cmd.ExecuteScalar();
            }
        }

        public int GetUserId()
        {
            return this.userid;
        }

        public string GetUsername()
        {
            return this.username;
        }

        public int GetScore()
        {
            return this.score;
        }

    }
}