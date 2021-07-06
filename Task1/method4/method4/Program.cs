using System;

namespace method4
{
    class Program
    {
        static void Main(string[] args)
        {
            //Kullanıcıdan string olarak alınan rakamları diziye atayıp dizi elemanlarını toplama

            string identityNumber;
            int sum = 0;
            Console.WriteLine("TC kimlik numaranızı giriniz:");
            identityNumber = Console.ReadLine();
            char[] rakam = identityNumber.ToCharArray(0, 11);
            int[] numbers = new int[rakam.Length];
            for (int i = 0; i < rakam.Length; i++)
            {
                numbers[i] = Convert.ToInt32(rakam[i].ToString());
            }
            foreach (int c in numbers)
            {
                Console.WriteLine(c);
                sum = sum + c;
            }
            Console.WriteLine("Toplam= " + sum);
        }
    }
}
