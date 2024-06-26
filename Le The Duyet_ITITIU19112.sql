USE [Student]
GO
/****** Object:  Table [dbo].[Students]    Script Date: 24/03/2024 11:03:27 PM ******/
SET ANSI_NULLS ON
GO
SET QUOTED_IDENTIFIER ON
GO
SET ANSI_PADDING ON
GO
CREATE TABLE [dbo].[Students](
	[Sid] [char](10) NOT NULL,
	[Sname] [nvarchar](30) NOT NULL,
	[Dob] [date] NULL,
	[Address] [nvarchar](50) NULL,
	[ID_card] [nvarchar](12) NULL,
PRIMARY KEY CLUSTERED 
(
	[Sid] ASC
)WITH (PAD_INDEX = OFF, STATISTICS_NORECOMPUTE = OFF, IGNORE_DUP_KEY = OFF, ALLOW_ROW_LOCKS = ON, ALLOW_PAGE_LOCKS = ON) ON [PRIMARY]
) ON [PRIMARY]

GO
SET ANSI_PADDING OFF
GO
