using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ProjectFifaV2
{
    class Player
    {
        private int playerId;
        private string playerFirstname;
        private string PlayerLastname;
        private int goalsScored;
        private int teamId;

        public Player(int playerId, string playerFirstname, string playerLastname, int teamId, int goalsScored)
        {
            this.playerId = playerId;
            this.playerFirstname = playerFirstname;
            this.PlayerLastname = playerLastname;
            this.teamId = teamId;
            this.goalsScored = goalsScored;
        }

        public void Goal(Player player)
        {
            this.goalsScored++;
        }

        public int GetPlayerId()
        {
            return this.playerId;
        }
        public string GetPlayerFirstname()
        {
            return this.playerFirstname;
        }
        public string GetPlayerLastname()
        {
            return this.PlayerLastname;
        }
        public int GetGoalsScored()
        {
            return this.goalsScored;
        }
        public int GetTeamId()
        {
            return this.teamId;
        }
    }
}
