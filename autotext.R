library(LSAfun)
library(rgl)

args <- commandArgs(trailingOnly = TRUE)
#print(args)

text <- args[1]
N <- as.numeric(args[2])
#print (N)
#text <- "Automatic summarization is the process of shortening a text document with software, in order to create a summary with the major points of the original document. Technologies that can make a coherent summary take into account variables such as length, writing style and syntax."
 
output_result <- genericSummary(text, k=N, split=c(".","!","?"))
output_result

#path <- 'C:/xampp56/htdocs/autotext/output/demo.txt'
#write.table(output_result, file = path, sep = " ")

#write.text(output_result, path)
#print (genericSummary(text, k=N, split=c(".","!","?")))
#Rscript /Users/charleswang/Desktop/autotext.R "Automatic summarization is the process of shortening a text document with software, in order to create a summary with the major points of the original document. Technologies that can make a coherent summary take into account variables such as length, writing style and syntax." 2


