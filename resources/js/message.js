
import { ethers } from "/ethers-5.6.esm.min.js"
import { abi, contractAddress } from "./resources/js/constants.js"
  

async function purchaseProduct() {

    console.log(`paying with ${ethAmount}...`)
    if (typeof window.ethereum !== "undefined") {
      const provider = new ethers.providers.Web3Provider(window.ethereum)
      const signer = provider.getSigner()
      const contract = new ethers.Contract(contractAddress, abi, signer)
      try {
        const transactionResponse = await contract.pay({
          value: web3.utils.toWei('0.1', 'ether'),
        })
        await listenForTransactionMine(transactionResponse, provider)
      } catch (error) {
        console.log(error)
      }
    } else {
      payButton.innerHTML = "Please install MetaMask"
    }
  }

  const payNowButton = document.getElementById('payButton');
  payNowButton.onclick = purchaseProduct;
  
  function listenForTransactionMine(transactionResponse, provider) {
    console.log(`Mining ${transactionResponse.hash}`)
    return new Promise((resolve, reject) => {
        try {
            provider.once(transactionResponse.hash, (transactionReceipt) => {
                console.log(
                    `Completed with ${transactionReceipt.confirmations} confirmations. `
                )
                resolve()
            })
        } catch (error) {
            reject(error)
        }
    })
}
