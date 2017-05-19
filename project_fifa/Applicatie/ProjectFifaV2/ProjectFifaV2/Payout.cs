using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;

namespace ProjectFifaV2
{
    class Payout
    {
        protected int betAmount;
        protected int winningTeam;
        protected int multiplier;
        protected int prediction;

        public void PayoutBet(int prediction, int betAmount, int winningTeam)
        {
            this.prediction = prediction;
            this.betAmount = betAmount;
            this.winningTeam = winningTeam;

            if (prediction == winningTeam)
            {
                multiplier = 2;
            }
            else
            {
                multiplier = 0;
            }

            int winnings = (betAmount * multiplier);
            //uitbetalen.

        }


    }
}
