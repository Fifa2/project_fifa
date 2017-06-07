using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Data;
using System.Data.SqlClient;

namespace ProjectFifaV2
{
    class Bet
    {
        private DatabaseHandler dbh;
        private int currentuserId;
        private int currentuserScore;

        public Bet(int currentuserId)
        {
            this.currentuserId = currentuserId;
            this.dbh = new DatabaseHandler();
        }

        public void Compare()
        {
            int a;
            int b;
            int c;
            int d;

            using (SqlConnection conn = dbh.GetCon())
            {
                conn.Open();
                SqlCommand command = new SqlCommand("SELECT HomeTeamScore, AwayTeamScore, home_team_pre_score, away_team_pre_score FROM tbl_predictions LEFT JOIN TblGames ON Match_id=Game_id  WHERE userId = @userId", conn);
                command.Parameters.AddWithValue("userId", this.currentuserId);
                using (SqlDataReader dataReader = command.ExecuteReader())
                {
                    try
                    {
                        if (dataReader != null && dataReader.HasRows)
                        {
                            while (dataReader.Read())
                            {
                                a = Convert.ToInt32(dataReader["home_team_pre_score"]);
                                b = Convert.ToInt32(dataReader["away_team_pre_score"]);
                                c = Convert.ToInt32(dataReader["HomeTeamScore"]);
                                d = Convert.ToInt32(dataReader["AwayTeamScore"]);

                                if (a == c && b == d)
                                {
                                    this.currentuserScore = +3;
                                }

                                else if (a < b && c < d || a > b && c > d)
                                {
                                    this.currentuserScore = +1;
                                }
                            }
                        }
                    }
                    finally
                    {
                        SendUserScore();
                        dataReader.Close();
                        conn.Close();
                    }
                }
            }
        }

        private void SendUserScore()
        {
            using (SqlConnection conn = dbh.GetCon())
            using (SqlCommand cmd = new SqlCommand("UPDATE TblUsers SET Score = @userscore WHERE Id = @id", conn))
            {
                dbh.TestConnection();
                dbh.OpenConnectionToDB();
                cmd.Parameters.AddWithValue("id", this.currentuserId);
                cmd.Parameters.AddWithValue("userscore", this.currentuserScore);
                cmd.ExecuteNonQuery();
                conn.Close();
            }
        }
    }
}


