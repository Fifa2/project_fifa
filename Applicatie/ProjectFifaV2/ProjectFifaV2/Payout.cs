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
        protected int bet;

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
        public int GetBet()
        {
            return bet;
        }
        public void SetBet(int bet)
        {
            this.bet = bet; 
        }


    }
}
